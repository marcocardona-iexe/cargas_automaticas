<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Api extends BaseConfig
{
    // Si tu PHP >= 7.4 y deseas typed properties, puedes usar:
    public string $baseURL;
    public string $apiKey;

    public function __construct()
    {
        parent::__construct();
        // Leer variables de entorno con env()
        $this->baseURL = env('MOODLE_API_BASE_URL', '');
        $this->apiKey  = env('MOODLE_API_TOKEN', '');
    }
}
