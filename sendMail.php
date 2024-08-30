<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$secretKey = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = htmlspecialchars(trim($_POST["message"]));
    }

    $recaptchaToken = $_POST['g-recaptcha-response'];
    if (!verifyRecaptcha($recaptchaToken, $secretKey)) {
        $errors[] = "reCAPTCHA verification failed.";
    }

    if (empty($errors)) {
        $return = sendMail($email, $name);
    }

//    header('Location: /');
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

function sendMail($email, $name)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = '';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($email, $name);
        $mail->addAddress('marcingodfryd@gmail.com', 'Marcin Godfryd');

        $mail->isHTML(true);
        $mail->Subject = 'testrrrrrrrr';
        $mail->Body    = 'test body <b>in bold!</b>';
        $mail->AltBody = 'test alt';

        $mail->send();
        return 'ok';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return 'error';
    }

}

