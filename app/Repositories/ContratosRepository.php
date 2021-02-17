<?php

namespace App\Repositories;

use App\Models\Contrato;
use Illuminate\Database\Eloquent\Model;

class ContratosRepository extends Repository {

	public $model = Contrato::class;

	public $rulesStore = [
        'D_FechaInicio' => 'required|date',
        'D_FechaFin' => 'required|date',
        'S_URLContrato' => 'max:255',
        'tw_corporativos_id' => 'required|integer|exists:tw_corporativos,id',
    ];

    public $rulesUpdate = [
        'D_FechaInicio' => 'required|date',
        'D_FechaFin' => 'required|date',
        'S_URLContrato' => 'max:255',
        'tw_corporativos_id' => 'required|integer|exists:tw_corporativos,id',
    ];

    public function closureStoreModel($model, $request): Model
    {
    	return $model;
    }

    public function closureUpdateModel($model, $request, $id): Model
    {
    	return $model;
    }
}