<?php

class Recaptcha
{
    private $secretKey;

    public function __construct($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    public function verify($token)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $this->secretKey,
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
}
