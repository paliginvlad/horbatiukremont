/* ============================================================
   CONTACT.JS — Contact form validation & submission
============================================================ */

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const notice = document.getElementById('form-notice');
    const msgRequired = form.dataset.msgRequired || 'This field is required.';
    const msgEmail = form.dataset.msgEmail || 'Please enter a valid email address.';
    const msgSuccess = form.dataset.msgSuccess || 'Message sent! We will contact you soon.';
    const msgError = form.dataset.msgError || 'An error occurred. Please try again.';

    function validateField(group) {
        const input = group.querySelector('input, textarea');
        if (!input) return true;
        let valid = true;
        const errEl = group.querySelector('.field-error');

        if (input.required && !input.value.trim()) {
            if (errEl) errEl.textContent = msgRequired;
            group.classList.add('has-error');
            valid = false;
        } else if (input.type === 'email' && input.value.trim()) {
            const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRe.test(input.value.trim())) {
                if (errEl) errEl.textContent = msgEmail;
                group.classList.add('has-error');
                valid = false;
            }
        }

        if (valid) {
            group.classList.remove('has-error');
        }

        return valid;
    }

    // Inline validation on blur
    form.querySelectorAll('.form-group').forEach(function (group) {
        const input = group.querySelector('input, textarea');
        if (input) {
            input.addEventListener('blur', function () { validateField(group); });
            input.addEventListener('input', function () {
                if (group.classList.contains('has-error')) validateField(group);
            });
        }
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        let allValid = true;
        form.querySelectorAll('.form-group').forEach(function (group) {
            if (!validateField(group)) allValid = false;
        });

        if (!allValid) return;

        const submitBtn = form.querySelector('[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = '...';

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            if (data.success) {
                notice.className = 'form-notice success';
                notice.textContent = msgSuccess;
                notice.style.display = 'block';
                form.reset();
                notice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                notice.className = 'form-notice error';
                notice.textContent = data.message || msgError;
                notice.style.display = 'block';
            }
        })
        .catch(function () {
            notice.className = 'form-notice error';
            notice.textContent = msgError;
            notice.style.display = 'block';
        })
        .finally(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        });
    });
});
