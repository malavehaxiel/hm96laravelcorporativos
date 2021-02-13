<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ResourceController extends Controller {

	protected $repository;
	protected $rules;


    public function __construct()
    {
    	$this->repository = new $this->repository;
    }

	public function index()
    {
    	return $this->successResponse($this->repository->all());
    }

    public function store(Request $request)
    {
        $request->validate($this->repository->rulesStore);

        return $this->successCreatedResponse(
        	$this->repository->create($request)
        );
    }

    public function update(Request $request, $id)
    {
    	if (is_null($this->repository->model->find($id)))
    		return $this->errorNotFoundResponse();

    	$request->validate($this->repository->rulesUpdate);

    	return $this->successResponse(
    		$this->repository->update($request, $id)
    	);
    }
}