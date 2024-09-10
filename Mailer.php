<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Mailer
{
    private $mail;
    private $config;
    private $server;

    public function __construct()
    {
        $this->config = require 'config.php';
        $this->mail = new PHPMailer(true);
        $this->server = $_SERVER;
        $this->configureSMTP();
    }

    private function configureSMTP()
    {
        try {
            $this->mail->isSMTP();
            $this->mail->Host       = $this->config['smtp_host'];
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = $this->config['smtp_username'];
            $this->mail->Password   = $this->config['smtp_password'];
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port       = 587;
            $this->mail->CharSet    = 'UTF-8';
        } catch (Exception $e) {
            throw new Exception("Błąd konfiguracji SMTP: {$e->getMessage()}");
        }
    }

    public function sendAdminNotification($email, $name, $message)
    {
        try {
            $adminEmail = $this->config['smtp_from_email'];
            $adminName = $this->config['smtp_from_name'];

            $this->mail->setFrom($email, $name);
            $this->mail->addReplyTo($email);
            $this->mail->addAddress($adminEmail, $adminName);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Nowa wiadomość ze strony marcingodfryd.pl';
            $this->mail->Body    = "
                <h2>Nowa wiadomość od użytkownika</h2>
                <p><strong>Nazwa:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Wiadomość:</strong><br>$message</p>
                <p><strong>IP:</strong><br>{$this->server['REMOTE_ADDR']}</p>
            ";
            $this->mail->AltBody = "Nazwa: $name\nEmail: $email\nWiadomość: $message";
            $this->mail->send();

        } catch (Exception $e) {
            throw new Exception("Wiadomość do administratora nie mogła zostać wysłana. Błąd: {$this->mail->ErrorInfo}");
        }
    }

    public function sendUserConfirmation($email, $name, $message)
    {
        try {
            $adminEmail = $this->config['smtp_from_email'];
            $adminName = $this->config['smtp_from_name'];

            $this->mail->clearAddresses();
            $this->mail->clearReplyTos();
            $this->mail->setFrom($adminEmail, $adminName);
            $this->mail->addReplyTo($adminEmail);
            $this->mail->addAddress($email, $name);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Potwierdzenie wysyłki wiadomości';
            $this->mail->Body    = "
                <h2>Wiadomość wysłana</h2>
                <p>Cześć $name,</p>
                <p>Dziękujemy za kontakt! Twoja wiadomość została wysłana do nas pomyślnie:</p>
                <blockquote>$message</blockquote>
                <p>Odezwiemy się do Ciebie jak najszybciej.</p>
                <p>Pozdrawiamy,<br>Zespół marcingodfryd.pl</p>
            ";
            $this->mail->AltBody = "Cześć $name,\nDziękujemy za kontakt! Twoja wiadomość została wysłana do nas pomyślnie: $message\nOdezwiemy się do Ciebie jak najszybciej.";
            $this->mail->send();

        } catch (Exception $e) {
            throw new Exception("Wiadomość potwierdzająca do użytkownika nie mogła zostać wysłana. Błąd: {$this->mail->ErrorInfo}");
        }
    }
}
