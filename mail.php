<?php
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/include/config.php';
require_once __DIR__ . '/include/form-security.php';

function respond(int $status, bool $success, string $message): void
{
    http_response_code($status);
    header('Cache-Control: no-store');
    header('X-Content-Type-Options: nosniff');
    if (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false) {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode(['success' => $success, 'message' => $message]);
    } else {
        header('Content-Type: text/html; charset=UTF-8');
        echo '<!doctype html><html lang="en"><meta charset="utf-8">'
            . '<meta name="viewport" content="width=device-width, initial-scale=1">'
            . '<title>Enquiry | JMSMICA</title><main><h1>'
            . ($success ? 'Thank you' : 'Unable to send enquiry') . '</h1><p>'
            . htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
            . '</p><a href="contact-us.php">Return to contact page</a></main></html>';
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, false, 'Please submit an enquiry using one of our website forms.');
}

if (!is_string($_POST['csrf_token'] ?? null)
    || !hash_equals($_SESSION['enquiry_token'], $_POST['csrf_token'])) {
    respond(403, false, 'Your session has expired. Please refresh the page and try again.');
}

// A hidden field catches basic automated submissions without disturbing visitors.
if (!empty($_POST['website'])) {
    respond(422, false, 'Unable to submit this enquiry. Please refresh and try again.');
}

foreach (['name', 'phone', 'message', 'source'] as $field) {
    if (isset($_POST[$field]) && !is_string($_POST[$field])) {
        respond(422, false, 'Please enter valid enquiry details.');
    }
}
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');
$source = trim($_POST['source'] ?? '');

if (strlen($name) > 600 || preg_match('/\A.{1,150}\z/u', $name) !== 1 || preg_match('/[\x00-\x1F\x7F]/', $name)) {
    respond(422, false, 'Please enter your name (up to 150 characters).');
}
$digits = preg_replace('/\D/', '', $phone);
if (!preg_match('/^[+0-9() .\-]{7,25}$/D', $phone) || strlen($digits) < 7 || strlen($digits) > 15) {
    respond(422, false, 'Please enter a valid phone number, including your country code if needed.');
}
if (strlen($message) > 20000 || preg_match('/\A.{1,5000}\z/us', $message) !== 1 || strpos($message, "\0") !== false) {
    respond(422, false, 'Please enter your message (up to 5,000 characters).');
}
if (!preg_match('/^[a-z0-9-]+\.php$/D', $source)) {
    $source = 'Website enquiry';
}

if (time() - ($_SESSION['last_enquiry_attempt'] ?? 0) < 30) {
    header('Retry-After: 30');
    respond(429, false, 'Please wait 30 seconds before sending another enquiry.');
}
$_SESSION['last_enquiry_attempt'] = time();

try {
    if (!is_file(__DIR__ . '/vendor/autoload.php')) {
        throw new RuntimeException('Install Composer dependencies before enabling enquiries.');
    }
    require __DIR__ . '/vendor/autoload.php';
    if (empty($smtp['host']) || empty($smtp['username']) || empty($smtp['password'])
        || !filter_var($smtp['from_email'], FILTER_VALIDATE_EMAIL)
        || !filter_var($smtp['to_email'], FILTER_VALIDATE_EMAIL)
        || !in_array($smtp['encryption'], ['tls', 'ssl'], true)) {
        throw new RuntimeException('SMTP configuration is missing or invalid.');
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtp['host'];
    $mail->Port = (int) $smtp['port'];
    $mail->SMTPAuth = true;
    $mail->Username = $smtp['username'];
    $mail->Password = $smtp['password'];
    $mail->SMTPSecure = $smtp['encryption'];
    $mail->Timeout = 15;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom($smtp['from_email'], $smtp['from_name']);
    $mail->addAddress($smtp['to_email']);
    $mail->Subject = 'JMSMICA website enquiry - ' . $source;
    $mail->Body = "New website enquiry\n\nName: {$name}\nPhone: {$phone}\nPage: {$source}\n\nMessage:\n{$message}\n";
    $mail->send();
    respond(200, true, 'Thank you! Your enquiry has been sent. Our team will contact you shortly.');
} catch (Throwable $error) {
    // Do not expose SMTP credentials or server diagnostics to visitors.
    error_log('JMSMICA enquiry delivery failed (' . get_class($error) . '). Check server SMTP configuration and connectivity.');
    respond(503, false, 'We could not send your enquiry right now. Please try again later or call +91-8595629100.');
}
