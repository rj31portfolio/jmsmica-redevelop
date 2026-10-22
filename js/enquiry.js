(function () {
    'use strict';

    function feedback(icon, title, message) {
        if (window.Swal) {
            return window.Swal.fire({
                icon: icon,
                title: title,
                text: message,
                confirmButtonColor: '#b71923'
            });
        }
        window.alert(title + '\n\n' + message);
    }

    document.querySelectorAll('[data-enquiry-form]').forEach(function (form) {
        form.addEventListener('submit', async function (event) {
            event.preventDefault();
            if (form.dataset.sending === 'true' || !form.reportValidity()) return;

            var button = form.querySelector('button[type="submit"], button:not([type])');
            var label = button.textContent;
            form.dataset.sending = 'true';
            form.setAttribute('aria-busy', 'true');
            button.disabled = true;
            button.textContent = 'Sending...';

            try {
                var response = await fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'Accept': 'application/json' },
                    credentials: 'same-origin'
                });
                var result = await response.json();
                if (!response.ok || result.success !== true) {
                    throw new Error(result.message || 'Please try again later.');
                }
                form.reset();
                feedback('success', 'Enquiry sent', result.message);
            } catch (error) {
                feedback('error', 'Unable to send enquiry', error instanceof SyntaxError || error instanceof TypeError
                    ? 'We could not connect to the enquiry service. Please try again later or call +91-8595629100.'
                    : error.message);
            } finally {
                delete form.dataset.sending;
                form.removeAttribute('aria-busy');
                button.disabled = false;
                button.textContent = label;
            }
        });
    });
}());
