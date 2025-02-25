<?php

namespace App\Libraries;

use CodeIgniter\HTTP\Client;

class ApiClient
{
    protected $client;
    protected $baseURL;
    protected $apiKey;

    public function __construct()
    {
        $config = config('Api');
        $this->baseURL = $config->baseURL;
        $this->apiKey = $config->apiKey;
        $this->client = service('curlrequest'); // Usa el servicio cURL de CodeIgniter
    }

    public function request(string $method, string $endpoint, array $data = [])
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type'  => 'application/json',
            ],
            'json' => $data
        ];

        $response = $this->client->request($method, $this->baseURL . $endpoint, $options);
        return json_decode($response->getBody(), true);
    }
}
