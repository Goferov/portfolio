<?php
session_start();

require_once 'Mailer.php';
require_once 'Recaptcha.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config    = require 'config.php';
    $mailer    = new Mailer();
    $recaptcha = new Recaptcha($config['recaptchaSecretKey']);
    $errors    = [];

    $name    = isset($_POST['name']) ? trim($_POST['name']) : null;
    $email   = isset($_POST['email']) ? trim($_POST['email']) : null;
    $message = isset($_POST['message']) ? trim($_POST['message']) : null;
    $lang    = $_POST['lang'] ?? 'pl';
    $lang    = in_array($lang, ['pl','en'], true) ? $lang : 'pl';

    $recaptchaToken = $_POST['g-recaptcha-response'] ?? '';

    if ($name === '')   $errors[] = $lang==='en' ? 'Name is required.' : 'Nazwa jest wymagana.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = $lang==='en' ? 'A valid email is required.' : 'Wymagany jest poprawny adres e-mail.';
    if ($message === '') $errors[] = $lang==='en' ? 'Message is required.' : 'Wiadomość jest wymagana.';
    if (!$recaptcha->verify($recaptchaToken)) $errors[] = $lang==='en' ? 'reCAPTCHA verification failed!' : 'Weryfikacja reCAPTCHA nie powiodła się!';

    if (empty($errors)) {
        try {
            $mailer->sendAdminNotification($email, $name, $message);
            $mailer->sendUserConfirmation($email, $name, $message, $lang);

            $_SESSION['success'] = $lang==='en'
                ? 'Your message has been sent successfully.'
                : 'Twoja wiadomość została pomyślnie wysłana.';
        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
    }

    $redirect = ($lang === 'en') ? '/en#contact' : '/#contact';
    header('Location: ' . $redirect, true, 303);
    exit();
}
