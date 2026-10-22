<input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['enquiry_token'], ENT_QUOTES, 'UTF-8') ?>">
<input type="hidden" name="source" value="<?= htmlspecialchars(basename($_SERVER['SCRIPT_NAME']), ENT_QUOTES, 'UTF-8') ?>">
<div class="enquiry-trap" aria-hidden="true">
    <label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
</div>
