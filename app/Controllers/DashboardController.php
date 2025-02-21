<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function create(){
        return view('dashboard/create');

    }
}
