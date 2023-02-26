<?php

namespace PassQa\Delivery;

class Orders
{
    private array $options;

    public function __construct($token)
    {
        $this->options = [
            CURLOPT_URL            => "https://api.pass.qa/business/v1/orders",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "GET",
            CURLOPT_HTTPHEADER     => [
                "Authorization: Bearer {$token}",
                'Content-Type: application/json; charset=utf-8',
                'Accept: application/json'
            ],
        ];
    }
}