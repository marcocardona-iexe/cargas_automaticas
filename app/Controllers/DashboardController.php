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

    public function obtenerCursos(){

         // Obtén los cursos a través del repositorio
         $cursos = $this->courseRepository->obtenerCursos();
         var_dump($this->response->setJSON($cursos));
         exit();

        //return view('dashboard/create');

    }
}
