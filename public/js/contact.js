const contactForm = document.querySelector('#contact-form');

if (contactForm) {
    const fields = [
        { input: contactForm.elements.namedItem('name'), error: document.querySelector('#name-error'), label: 'Name' },
        { input: contactForm.elements.namedItem('email'), error: document.querySelector('#email-error'), label: 'Email' },
        { input: contactForm.elements.namedItem('subject'), error: document.querySelector('#subject-error'), label: 'Subject' },
        { input: contactForm.elements.namedItem('message'), error: document.querySelector('#message-error'), label: 'Message' },
    ];
    const status = document.querySelector('#form-status');

    const getError = ({ input, label }) => {
        if (!input.value.trim()) {
            return `${label} is required.`;
        }

        if (input.name === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim())) {
            return 'Enter a valid email address.';
        }

        return '';
    };

    const validateField = (field) => {
        const errorMessage = getError(field);
        field.input.setAttribute('aria-invalid', String(Boolean(errorMessage)));
        field.error.textContent = errorMessage;
        return !errorMessage;
    };

    fields.forEach((field) => {
        field.input.addEventListener('input', () => {
            if (field.input.hasAttribute('aria-invalid')) {
                validateField(field);
            }
            status.textContent = '';
            status.classList.remove('is-error');
        });
    });

    contactForm.addEventListener('submit', (event) => {
        event.preventDefault();
        status.textContent = '';
        status.classList.remove('is-error');

        const firstInvalidField = fields.find((field) => !validateField(field));

        if (firstInvalidField) {
            status.textContent = 'Please correct the highlighted fields.';
            status.classList.add('is-error');
            firstInvalidField.input.focus();
            return;
        }

        status.textContent = 'Your entries look good. This demo does not send or store your message.';
        contactForm.reset();
        fields.forEach(({ input, error }) => {
            input.removeAttribute('aria-invalid');
            error.textContent = '';
        });
    });
}
