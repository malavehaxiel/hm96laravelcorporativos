<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

abstract class Repository {

	protected $model;
	public $rulesStore = [];
	public $closureStoreModel;

	public function __construct()
	{
		$this->model = new $this->model;
	}

	abstract public function closureStoreModel($model, $request);

	public function all()
	{
		return $this->model->all();
	}

	public function create(Request $request)
	{
		$resource = new $this->model($request->all());
		$resource = $this->closureStoreModel($resource, $request);
		$resource->save();
		$resource->fresh();

		return $resource;
	}
}