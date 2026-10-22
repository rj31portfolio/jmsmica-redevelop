<?php
// Set to false when all website pages are ready to go live.
$homePageOnly = false;

// SMTP credentials stay on the server. Environment variables may be overridden
// in the ignored include/config.local.php file (see README.md).
$smtp = [
    'host' => getenv('SMTP_HOST') ?: 'smtp.gmail.com',
    'port' => (int) (getenv('SMTP_PORT') ?: 587),
    'encryption' => getenv('SMTP_ENCRYPTION') ?: 'tls',
    'username' => getenv('SMTP_USERNAME') ?: 'rj9work@gmail.com',
    'password' => getenv('SMTP_PASSWORD') ?: 'wcce owbq adxo njcn',
    'from_email' => getenv('SMTP_FROM_EMAIL') ?: 'rj9work@gmail.com',
    'from_name' => 'JMSMICA Website',
    'to_email' => getenv('SMTP_TO_EMAIL') ?: 'rj9work@gmail.com',
];

if (is_file(__DIR__ . '/config.local.php')) {
    require __DIR__ . '/config.local.php';
}
