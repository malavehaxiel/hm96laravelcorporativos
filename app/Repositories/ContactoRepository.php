<?php

namespace App\Repositories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Model;

class ContactoRepository extends Repository {

	public $model = Contacto::class;

	public $rulesStore = [
        'S_Nombre' => 'required|max:45',
        'S_Puesto' => 'required|max:45',
        'S_Comentarios' => 'max:255',
        'N_TelefonoFijo' => 'max:12',
        'N_TelefonoMovil' => 'max:12',
        'S_Email' => 'required|email',
        'tw_corporativos_id' => 'required|integer|exists:tw_corporativos,id',
    ];

    public $rulesUpdate = [
        'S_Nombre' => 'required|max:45',
        'S_Puesto' => 'required|max:45',
        'S_Comentarios' => 'max:255',
        'N_TelefonoFijo' => 'max:12',
        'N_TelefonoMovil' => 'max:12',
        'S_Email' => 'required|email',
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