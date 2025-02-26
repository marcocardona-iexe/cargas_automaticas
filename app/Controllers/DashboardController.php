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
        $cursos = $this->courseRepository->obtenerCursos();
    
        // Usar la función de depuración en lugar de escribir todo el código manualmente
        debug_json($cursos);
    
        // Si todo está bien, puedes comentar la depuración y usar la respuesta normal
        // return $this->response->setJSON($cursos);
    }
    
}
