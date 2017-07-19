<?php

	namespace Controller;
	use View\View;
	use Lib\Mensagem;
	
	class Controller{
	
		private $view;
		private $model;
		private $dados;
	
		function __construct( $tipo ){
		
			if( isset( $_GET['modulo'] ) ){
				
				$this->view = $_GET['modulo'];
				$model = "Model\\{$_GET['modulo']}";
				$this->model = new $model();
				
			}else{
				
				$this->view = 'index';
			}
			
			$action	= ( isset( $_GET['acao'] ) ) ? strtolower( $_GET['acao'] )  : NULL;
			
			if( $action ){
				Mensagem::limpar();
				$this->dados = $this->model->$action();
				$this->view .= "/$action";
			}
						
			View::carregar( "{$this->view}", $tipo, $this->dados );
			
		}
	
	}
