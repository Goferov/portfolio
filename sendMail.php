<?php

session_start();

require_once 'Mailer.php';
require_once 'Recaptcha.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $config = require 'config.php';
    $mailer = new Mailer();
    $recaptcha = new Recaptcha($config['recaptchaSecretKey']);
    $errors = [];

    $name = !empty($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : null;
    $email = !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ? htmlspecialchars(trim($_POST["email"])) : null;
    $message = !empty($_POST["message"]) ? htmlspecialchars(trim($_POST["message"])) : null;
    $recaptchaToken = $_POST['g-recaptcha-response'];

    if (!$name) $errors[] = "Nazwa jest wymagana.";
    if (!$email) $errors[] = "Wymagany jest poprawny adres e-mail.";
    if (!$message) $errors[] = "Wiadomość jest wymagana.";
    if (!$recaptcha->verify($recaptchaToken)) $errors[] = "Weryfikacja reCAPTCHA nie powiodła się!";

    if (empty($errors)) {
        try {
            $mailer->sendAdminNotification($email, $name, $message);
            $mailer->sendUserConfirmation($email, $name, $message);
            $_SESSION['success'] = "Twoja wiadomość została pomyślnie wysłana.";

        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
    }
    else {
        $_SESSION['errors'] = $errors;
    }

    header('Location: /#contact');
    exit();
}
