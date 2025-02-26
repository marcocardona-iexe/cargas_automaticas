<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Repositories\CourseRepository;

class DashboardController extends BaseController
{

    protected $courseRepository;

    public function __construct() {
        $this->courseRepository = new CourseRepository();
    }

    public function index()
    {
        return view('dashboard/index');
    }

    public function obtenerCursos()
    {
        // Obtén los cursos a través del repositorio
        $cursos = $this->courseRepository->obtenerCursos();
    
        // Depuración: Verificar qué datos devuelve la API
        header('Content-Type: application/json');
        echo json_encode($cursos, JSON_PRETTY_PRINT);
        exit();
    
        // Si todo está correcto, descomentar esta línea
        // return $this->response->setJSON($cursos);
    }
    
}
