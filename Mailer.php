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

    public function sendUserConfirmation($email, $name, $message, string $lang = 'pl')
    {
        try {
            $adminEmail = $this->config['smtp_from_email'];
            $adminName = $this->config['smtp_from_name'];

            $subjects = [
                'pl' => 'Potwierdzenie wysyłki wiadomości',
                'en' => 'Your message has been received',
            ];
            $html = [
                'pl' => "
                <h2>Wiadomość wysłana</h2>
                <p>Cześć {$name},</p>
                <p>Dziękujemy za kontakt! Twoja wiadomość dotarła do nas:</p>
                <blockquote>{$message}</blockquote>
                <p>Odezwiemy się tak szybko, jak to możliwe.</p>
                <p>Pozdrawiamy,<br>Zespół marcingodfryd.pl</p>
            ",
                'en' => "
                <h2>Message sent</h2>
                <p>Hi {$name},</p>
                <p>Thanks for reaching out. We have received your message:</p>
                <blockquote>{$message}</blockquote>
                <p>We will get back to you as soon as possible.</p>
                <p>Best regards,<br>marcingodfryd.pl Team</p>
            ",
            ];
            $alt = [
                'pl' => "Cześć {$name},\nDziękujemy za kontakt! Otrzymaliśmy Twoją wiadomość:\n{$message}\nOdezwiemy się najszybciej, jak to możliwe.\n— marcingodfryd.pl",
                'en' => "Hi {$name},\nThanks for reaching out. We have received your message:\n{$message}\nWe will get back to you as soon as possible.\n— marcingodfryd.pl",
            ];

            if (!in_array($lang, ['pl','en'], true)) { $lang = 'pl'; }


            $this->mail->clearAddresses();
            $this->mail->clearReplyTos();
            $this->mail->setFrom($adminEmail, $adminName);
            $this->mail->addReplyTo($adminEmail);
            $this->mail->addAddress($email, $name);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subjects[$lang];
            $this->mail->Body    = $html[$lang];
            $this->mail->AltBody = $alt[$lang];
            $this->mail->send();

        } catch (Exception $e) {
            throw new Exception("Wiadomość potwierdzająca do użytkownika nie mogła zostać wysłana. Błąd: {$this->mail->ErrorInfo}");
        }
    }
}
