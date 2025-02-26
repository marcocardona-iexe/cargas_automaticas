<?php

namespace App\Libraries;

use CodeIgniter\HTTP\CURLRequest;

/**
 * Class ApiClient
 *
 * This class provides a simplified interface to interact with an external API
 * using CodeIgniter's cURLRequest service. It automatically loads configuration
 * (base URL and API key) from \Config\Api.
 *
 * @package App\Libraries
 */
class ApiClient
{
    /**
     * The cURL request client instance.
     *
     * @var CURLRequest
     */
    protected $client;

    /**
     * The base URL for the API.
     *
     * @var string
     */
    protected $baseURL;

    /**
     * The API key used to authenticate requests.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Constructor
     *
     * Initializes the class with configuration and the cURLRequest service.
     */
    public function __construct()
    {
        /**
         * @var \Config\Api $config
         */
        $config = config('Api');

        $this->baseURL = $config->baseURL;
        $this->apiKey  = $config->apiKey;

        // Alternatively, you can use the service helper:
        // $this->client = \Config\Services::curlrequest();
        // But 'service('curlrequest')' is shorthand for the same thing.
        $this->client = service('curlrequest');
    }

    /**
     * Send an HTTP request to the specified endpoint.
     *
     * @param string $method   The HTTP verb to use (GET, POST, PUT, etc.)
     * @param string $endpoint The API endpoint (relative to $baseURL).
     * @param array  $data     Request payload or parameters.
     *
     * @return array|null      Decoded JSON response as an associative array, or null on failure.
     */
    public function request(string $method, string $endpoint, array $data = [])
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type'  => 'application/json',
            ],
            'json' => $data,
        ];

        $response = $this->client->request($method, $this->baseURL . $endpoint, $options);
        return json_decode($response->getBody(), true);
    }
}
