<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('templates/barra_superior');
		echo view('templates/menu');
		echo view('inicio');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
