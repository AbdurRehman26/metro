<?php

namespace App;

use GuzzleHttp\Client;

class HttpRequestData
{
    private $endPoint = 'https://app.fakejson.com';

    private $token = 'yDJpNalhc8NfsU7qn4pt7A';

    private $client;
    private $jsonData;

    public function __construct(){
        $this->jsonData = file_get_contents(__DIR__."/data.json");
        $this->client = new Client([
            'base_uri' => $this->endPoint,
        ]);
    }

    public function fetchData(): string
    {
        return $this->jsonData;
        $response = $this->client->request('POST', '/q', [
            'form_params' => [
                'token' => $this->token,
                'data' => json_encode($this->jsonData)
            ]
        ]);
        return $response->getBody();
    }

}