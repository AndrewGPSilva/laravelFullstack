<?php

namespace App\Repositories;

use App\Http\Requests\AulaRequest;
use App\Models\Aula;

class AulaRepository
{
    protected $model;

    public function __construct(Aula $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create(AulaRequest $request)
    {
        $aula = $request->all();
        $this->model->create($aula);
    }

    public function delete($id)
    {
        $aula = $this->model->findOrFail($id);
        $this->model->delete($aula);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(AulaRequest $request, $id)
    {
        $aula = $this->model->findOrFail($id);
        $aulaDados = $request->all();
        $aula->update($aulaDados);
    }
}
