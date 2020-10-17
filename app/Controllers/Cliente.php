<?php namespace App\Controllers;

class Cliente extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('templates/barra_superior');
		echo view('templates/menu');
		echo view('cliente');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
