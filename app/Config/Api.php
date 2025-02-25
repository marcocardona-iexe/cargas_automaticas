<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Api extends BaseConfig
{
    public string $baseURL;
    public string $apiKey;

    public function __construct()
    {
        parent::__construct();
        $this->baseURL = env('MOODLE_API_BASE_URL', '');
        $this->apiKey  = env('MOODLE_API_TOKEN', '');
    }
}
