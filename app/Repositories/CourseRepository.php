<?php

namespace App\Repositories;

use App\Libraries\ApiClient;

class CourseRepository
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