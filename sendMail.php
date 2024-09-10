<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$config = require 'config.php';


$secretKey = $config['recaptchaSecretKey'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST["name"])) {
        $errors[] = "Nazwa jest wymagana.";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    if (empty($_POST["email"])) {
        $errors[] = "Wymagany jest adres e-mail.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Nieprawidłowy format wiadomości e-mail.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    if (empty($_POST["message"])) {
        $errors[] = "Wiadomość jest wymagana.";
    } else {
        $message = htmlspecialchars(trim($_POST["message"]));
    }

    $recaptchaToken = $_POST['g-recaptcha-response'];
    if (!verifyRecaptcha($recaptchaToken, $secretKey)) {
        $errors[] = "Weryfikacja reCAPTCHA nie powiodła się! Spróbuj ponownie.";
    }

    if (empty($errors)) {
        $return = sendMail($email, $name, $message);
    }

    header('Location: /#contact');
}

function verifyRecaptcha($token, $secretKey) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $token
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);

    return $response->success && $response->score >= 0.5;
}

function sendMail($email, $name, $message)
{
    $config = require 'config.php';

    $adminEmail = $config['smtp_from_email'];
    $adminName = $config['smtp_from_name'];

    $mail = new PHPMailer(true);

    try {
        // Ustawienia SMTP
        $mail->isSMTP();
        $mail->Host       = $config['smtp_host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['smtp_username'];  // Zmień na swój adres Gmail
        $mail->Password   = $config['smtp_password'];  // Tutaj wprowadź hasło aplikacji
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->SMTPDebug  = 0;
        $mail->CharSet = 'UTF-8';

        // 1. Wyślij e-mail do administratora z wiadomością użytkownika
        $mail->setFrom($email, $name);
        $mail->addReplyTo($email);
        $mail->addAddress($adminEmail, $adminName);

        $mail->isHTML(true);
        $mail->Subject = 'Nowa wiadomość ze strony marcingodfryd.pl';
        $mail->Body    = "
            <h2>Nowa wiadomość od użytkownika</h2>
            <p><strong>Nazwa:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Wiadomość:</strong><br>$message</p>
        ";
        $mail->AltBody = "Nazwa: $name\nEmail: $email\nWiadomość: $message";

        $mail->send();  // Wysyłka do admina

        // 2. Wyślij e-mail do użytkownika z potwierdzeniem wysyłki
        $mail->clearAddresses();  // Wyczyść odbiorców, żeby dodać nowego
        $mail->clearReplyTos();   // Wyczyść pola odpowiedzi

        $mail->setFrom($adminEmail, $adminName);  // E-mail od admina
        $mail->addReplyTo($adminEmail);           // Ustaw "Reply-To" na e-mail admina
        $mail->addAddress($email, $name);         // Wyślij do użytkownika

        $mail->Subject = 'Potwierdzenie wysyłki wiadomości';
        $mail->Body    = "
            <h2>Wiadomość wysłana</h2>
            <p>Cześć $name,</p>
            <p>Dziękujemy za kontakt! Twoja wiadomość została wysłana do nas pomyślnie:</p>
            <blockquote>$message</blockquote>
            <p>Odezwiemy się do Ciebie jak najszybciej.</p>
            <p>Pozdrawiamy,<br>Zespół marcingodfryd.pl</p>
        ";
        $mail->AltBody = "Cześć $name,\nDziękujemy za kontakt! Twoja wiadomość została wysłana do nas pomyślnie: $message\nOdezwiemy się do Ciebie jak najszybciej.";

        $mail->send();  // Wysyłka potwierdzenia do użytkownika

        return 'ok';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return 'error';
    }
}