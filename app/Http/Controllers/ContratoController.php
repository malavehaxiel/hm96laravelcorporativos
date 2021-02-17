<?php

namespace App\Http\Controllers;

use App\Repositories\ContratosRepository;
use Illuminate\Http\Request;

class ContratoController extends ResourceController
{
	protected $repository = ContratosRepository::class;

    public function __construct()
	{
		parent::__construct();
	}
}
