<?php

namespace App\Http\Controllers;

use App\Repositories\EmpresaRepository;
use Illuminate\Http\Request;

class EmpresaController extends ResourceController
{
    protected $repository = EmpresaRepository::class;

    public function __construct()
	{
		parent::__construct();
	}
}
