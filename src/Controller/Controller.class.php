<?php

namespace Controller;

use View\View;
use Lib\Mensagem;

class Controller 
{

	private $view;
	private $model;
	private $dados;

	function __construct($tipo)
	{
		// Recebe tipo como front/admin
		// Pega o modulo ex. Clientes e carrega a View e Model dele
		if (isset( $_GET['modulo'])) {
			$this->view = $_GET['modulo'];
			$model = "Model\\{$_GET['modulo']}";
			$this->model = new $model();
		} else {
			$this->view = 'index';
		}
		
		// Se Existir acao, torna ela em caixa baixa ou NULL
		$action	= (isset( $_GET['acao'])) ? strtolower( $_GET['acao'] )  : NULL;

		if( $action ){
			// Chama metodo para limpar mensagens
			Mensagem::limpar();
			// Chama acao do Model carregado
			$this->dados = $this->model->$action();
			// Seta view como Modulo/acao
			$this->view .= "/$action";
		}

		// Chamada o carregamento da View, passando string da view, tipo e dados
		View::carregar( "{$this->view}", $tipo, $this->dados );
	}
}
