<?php

namespace App\Repositories;

use App\Models\Corporativo;
use Illuminate\Database\Eloquent\Model;

class CorporativosRepository extends Repository {

	public $model = Corporativo::class;

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

    public $rulesUpdate = [
        'S_NombreCorto' => 'required|max:45',
        'S_NombreCompleto' => 'required|max:75',
        'S_LogoUrl' => 'url|max:255',
        'S_DBName' => 'required|max:45',
        'S_DBUsuario' => 'required|max:45',
        'S_DBPassword' => 'required|max:150',
        'S_SystemUrl' => 'required|url|max:255',
        'D_FechaIncorporacion' => 'required'
    ];

    public function closureStoreModel($model, $request): Model
    {
    	$model->tw_usuarios_id = auth()->user()->id;

    	return $model;
    }

    public function closureUpdateModel($model, $request, $id): Model
    {
    	return $model;
    }
}