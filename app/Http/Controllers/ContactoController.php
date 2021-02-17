<?php

namespace App\Http\Controllers;

use App\Repositories\ContactoRepository;
use Illuminate\Http\Request;

class ContactoController extends ResourceController
{
	protected $repository = ContactoRepository::class;

    public function __construct()
	{
		parent::__construct();
	}
}
