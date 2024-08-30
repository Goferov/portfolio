function sendForm(e) {
    e.preventDefault();

    const name = document.querySelector('#name').value.trim();
    const email = document.querySelector('#email').value.trim();
    const message = document.querySelector('#message').value.trim();

    let isValid = true;

    if (name === "") {
        setError('name', "Name is required.");
        isValid = false;
    } else {
        clearError('name');
    }

    if (email === "") {
        setError('email', "Email is required.");
        isValid = false;
    } else if (!validateEmail(email)) {
        setError('email', "Invalid email format.");
        isValid = false;
    } else {
        clearError('email');
    }

    if (message === "") {
        setError('message', "Message is required.");
        isValid = false;
    } else {
        clearError('message');
    }

    if (!isValid) {
        return;
    }

    const _this = this;

    grecaptcha.ready(function() {
        grecaptcha.execute('6LfA_TIqAAAAAFV1XknwAETlaOYYTVhWhhpiWVog', {action: 'submit'}).then(function(token) {
            _this.querySelector('.g-recaptcha-response').value = token;
            _this.submit();
        });
    });
}

function setError(inputId, message) {
    let errorElement = document.querySelector('#' + inputId + 'Error');

    if (!errorElement) {
        errorElement = document.createElement('div');
        errorElement.id = inputId + 'Error';
        errorElement.className = 'text-danger';
        document.querySelector('#' + inputId).parentNode.appendChild(errorElement);
    }

    errorElement.textContent = message;
}

function clearError(inputId) {
    let errorElement = document.querySelector('#' + inputId + 'Error');

    if (errorElement) {
        errorElement.remove();
    }
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

document.querySelector('#contactForm').addEventListener('submit', sendForm);