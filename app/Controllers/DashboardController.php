<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\MoodleApiService;

class DashboardController extends BaseController
{

    protected $moodleService;

    public function __construct() {
        $this->moodleService = new MoodleApiService();
    }

    public function index()
    {
        return view('dashboard/index');
    }

    public function obtenerCursos()
    {
        // por el momento se esta consumiendo directamente el servicio pero no siempre será asi
        //quizas mas adelante se consuma una clase que combine datos de service y repository
        $cursos = $this->moodleService->obtenerCursos();
    
        // Usar la función de depuración en lugar de escribir todo el código manualmente
        debug_json($cursos);
    
        // Si todo está bien, puedes comentar la depuración y usar la respuesta normal
        // return $this->response->setJSON($cursos);
    }
    
}
