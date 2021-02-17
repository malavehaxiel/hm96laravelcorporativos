<?php

namespace App\Http\Controllers;

use App\Repositories\DocumentosCorporativosRepository;
use Illuminate\Http\Request;

class DocumentoCorporativoController extends ResourceController
{
    protected $repository = DocumentosCorporativosRepository::class;

    public function __construct()
	{
		parent::__construct();
	}

	public function details($documentoId)
	{
		if (is_null($this->repository->model->find($documentoId)))
    		return $this->errorNotFoundResponse();

    	return $this->successResponse([
    		'documentos' => $this->repository->details($documentoId)
    	]);
	}
}
