<?php

namespace App\Http\Controllers;

use App\Services\AulaService;

class AulaController extends Controller
{
    protected $service;

    public function __construct(AulaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $aulas = $this->service->getAll();

        return view('aula.aulas', ['aulas' => $aulas]);
    }
}
