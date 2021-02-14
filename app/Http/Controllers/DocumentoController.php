<?php

namespace App\Http\Controllers;

use App\Repositories\DocumentosRepository;
use Illuminate\Http\Request;

class DocumentoController extends ResourceController
{
	protected $repository = DocumentosRepository::class;

    public function __construct()
	{
		parent::__construct();
	}
}
