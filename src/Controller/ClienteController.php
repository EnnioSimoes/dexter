<?php

namespace App\Controller;

use App\View\View;
use App\Lib\Mensagem;
use App\Model\Clientes;

class ClienteController 
{

	private $view;
	private $model;
	private $data;
	private $tipo;

	public function __construct()
	{
		$this->model = new Clientes;
		$this->view = 'Clientes';
		$this->tipo = 'admin';
	}

	public function index($request)
	{
		Mensagem::limpar();
		$this->data = $this->model->gerenciar();
		$this->view .= "/gerenciar";

		View::carregar( "{$this->view}", $this->tipo, $this->data );
		return '';
        // dd($this->data);
	}
}
