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
}
