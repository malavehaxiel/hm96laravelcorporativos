<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

abstract class Repository {

	public $model;
	public $rulesStore = [];
	public $closureStoreModel;

	public function __construct()
	{
		$this->model = new $this->model;
	}

	abstract public function closureStoreModel($model, $request): Model;
	abstract public function closureUpdateModel($model, $request, $id): Model;

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

	public function update(Request $request, $id)
	{
		$resource = $this->model->find($id);
		$resource->fill($request->all());
		$resource = $this->closureUpdateModel($resource, $request, $id);
		$resource->save();
		$resource->fresh();

		return $resource;
	}

	public function find($id)
	{
		return $this->model->find($id);
	}
}