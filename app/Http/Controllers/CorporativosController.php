<?php

namespace App\Http\Controllers;

use App\Repositories\CorporativosRepository;
use Illuminate\Http\Request;

class CorporativosController extends ResourceController
{
	protected $repository = CorporativosRepository::class;

	public function __construct()
	{
		parent::__construct();
	}

	public function details($id)
	{
		if (is_null($this->repository->model->find($id)))
    		return $this->errorNotFoundResponse();

    	return $this->successResponse(
    		$this->repository->details($id)
    	);
	}
}
