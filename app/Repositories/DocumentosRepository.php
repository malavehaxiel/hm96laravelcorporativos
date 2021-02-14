<?php

namespace App\Repositories;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Model;

class DocumentosRepository extends Repository {

	public $model = Documento::class;

	public $rulesStore = [
        'S_Nombre' => 'required|max:45',
        'N_Obligatorio' => 'required|boolean',
        'S_Descripcion' => 'max:255',
    ];

    public $rulesUpdate = [
        'S_Nombre' => 'required|max:45',
        'N_Obligatorio' => 'required|boolean',
        'S_Descripcion' => 'max:255',
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