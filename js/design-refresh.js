(function () {
    'use strict';

    var currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.main-menu .navigation a').forEach(function (link) {
        if (link.getAttribute('href') === currentPage) {
            link.setAttribute('aria-current', 'page');
            link.parentElement.classList.add('current');
        }
    });

    // Keep submenu state consistent for both touch and keyboard users.
    document.querySelectorAll('.main-menu .dropdown-btn').forEach(function (control, index) {
        var submenu = control.previousElementSibling;
        var label = control.parentElement.querySelector('a').textContent.trim();
        submenu.id = 'mineral-submenu-' + index;
        control.setAttribute('role', 'button');
        control.setAttribute('tabindex', '0');
        control.setAttribute('aria-label', 'Toggle ' + label + ' submenu');
        control.setAttribute('aria-controls', submenu.id);
        control.setAttribute('aria-expanded', 'false');
        if (window.jQuery) window.jQuery(control).off('click');
        control.addEventListener('click', function () {
            var expanded = control.getAttribute('aria-expanded') !== 'true';
            control.setAttribute('aria-expanded', String(expanded));
            control.parentElement.classList.toggle('submenu-open', expanded);
        });
        control.addEventListener('keydown', function (event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                control.click();
            }
        });
    });

    document.querySelectorAll('input[placeholder], textarea[placeholder]').forEach(function (field) {
        if (!field.labels.length && !field.hasAttribute('aria-label')) {
            field.setAttribute('aria-label', field.getAttribute('placeholder'));
        }
    });
    document.querySelectorAll('.social-icon-one a').forEach(function (link) {
        var icon = link.querySelector('.fa');
        if (icon) {
            var network = Array.from(icon.classList).find(function (name) { return name.indexOf('fa-') === 0; });
            if (network) link.setAttribute('aria-label', 'JMSMICA on ' + network.slice(3));
        }
    });
    document.querySelectorAll('a[target="_blank"]').forEach(function (link) {
        link.rel = 'noopener noreferrer';
    });

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches && window.jQuery) {
        window.jQuery('#myCarousel').carousel('pause');
    }
}());
