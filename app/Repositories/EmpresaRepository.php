<?php

namespace App\Repositories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Model;

class EmpresaRepository extends Repository {

	public $model = Empresa::class;

	public $rulesStore = [
        'S_RazonSocial' => 'required|max:150',
        'S_RFC' => 'required|max:13',
        'S_Pais' => 'max:75',
        'S_Estado' => 'max:75',
        'S_Municipio' => 'max:75',
        'S_ColoniaLocalidad' => 'max:75',
        'S_Domicilio' => 'max:75',
        'S_CodigoPostal' => 'max:5',
        'S_UsoCFDI' => 'max:45',
        'S_UrlRFC' => 'max:255',
        'S_UrlActaConstitutiva' => 'max:255',
        'S_Activo' => 'required',
        'S_Comentarios' => 'max:255',
        'tw_corporativos_id' => 'required|integer|exists:tw_corporativos,id',
    ];

    public $rulesUpdate = [
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