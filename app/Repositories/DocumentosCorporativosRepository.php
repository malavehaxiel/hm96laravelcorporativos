<?php

namespace App\Repositories;

use App\Models\DocumentoCorporativo;
use Illuminate\Database\Eloquent\Model;

class DocumentosCorporativosRepository extends Repository {

	public $model = DocumentoCorporativo::class;

	public $rulesStore = [
        'tw_corporativos_id' => 'required|integer|exists:tw_corporativos,id',
        'tw_documentos_id' => 'required|integer|exists:tw_documentos,id',
        'S_ArchivoUrl' => 'url|max:255',
    ];

    public $rulesUpdate = [
        'tw_corporativos_id' => 'required|integer|exists:tw_corporativos,id',
        'tw_documentos_id' => 'required|integer|exists:tw_documentos,id',
        'S_ArchivoUrl' => 'url|max:255',
    ];

    public function closureStoreModel($model, $request): Model
    {
    	return $model;
    }

    public function closureUpdateModel($model, $request, $id): Model
    {
    	return $model;
    }

    public function details($documentoId)
    {
        return $this->model->with('corporativo')
            ->where('tw_documentos_id', $documentoId)
            ->get();
    }
}