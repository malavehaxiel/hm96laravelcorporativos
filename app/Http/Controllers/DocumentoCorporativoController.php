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
}
