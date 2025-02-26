<?php

namespace App\Services;

use App\Libraries\ApiClient;

class MoodleApiService
{
    protected $apiClient;

    public function __construct()
    {
        $this->apiClient = new ApiClient();
    }

    // Obtener usuarios desde la API externa
    public function obtenerCursos()
    {

        return $this->apiClient->request('GET', 'core_course_get_courses');
    }

}