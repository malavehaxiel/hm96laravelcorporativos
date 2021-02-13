<?php

namespace App\Repositories;

use App\Models\Corporativo;

class CorporativosRepository extends Repository {

	protected $model = Corporativo::class;

	public $rulesStore = [
        'S_NombreCorto' => 'required|max:45',
        'S_NombreCompleto' => 'required|max:75',
        'S_LogoUrl' => 'url|max:255',
        'S_DBName' => 'required|max:45',
        'S_DBUsuario' => 'required|max:45',
        'S_DBPassword' => 'required|max:150',
        'S_SystemUrl' => 'required|url|max:255',
        'D_FechaIncorporacion' => 'required'
    ];

    public function closureStoreModel($model, $request)
    {
    	$model->tw_usuarios_id = auth()->user()->id;

    	return $model;
    }
}