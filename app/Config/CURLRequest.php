<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class CURLRequest extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * CURLRequest Share Options
     * --------------------------------------------------------------------------
     *
     * Whether share options between requests or not.
     *
     * If true, all the options won't be reset between requests.
     * It may cause an error request with unnecessary headers.
     */
    public bool $shareOptions = false;

    public bool $allowRedirects = true; // Permitir redirecciones en la API
    public int $maxRedirects = 5; // Máximo número de redirecciones
    public bool $verifySSL = false; // Desactivar verificación SSL en entornos de desarrollo
}
