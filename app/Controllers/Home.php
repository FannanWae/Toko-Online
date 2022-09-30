<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->session = session();
	}
	public function index()
	{
		return view('home', [
			'cart' => \Config\Services::cart(),
		]);
	}
}
