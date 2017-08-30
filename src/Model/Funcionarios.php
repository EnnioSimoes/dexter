<?php

namespace App\Model;
use App\Lib\Mensagem;

class Funcionarios extends AbstractModel
{
	
	protected $tabela = 'funcionarios';
	
	protected $propriedades = array (
								'id' => NULL,
								'email'	=> NULL,
								'prf_id' => NULL,
								'nome' => NULL,
								'senha'	=> NULL
							);
	public function inserir()
	{
		if( $_POST ){
			if( $_POST['senha'] == $_POST['conf_senha'] ){ 
				unset( $_POST['conf_senha'] );
				$_POST['senha'] = md5( $_POST['senha'] );
				if( $this->salvar() ){
					$modulo = ucfirst( $this );
					header("location:admin.php?modulo=$modulo&acao=gerenciar");
				}
			}else{
				Mensagem::set( 'As senhas não conferem', 'error' );
			}
		}
	}
	
	public function editar()
	{
		if( $_POST ){
			$_POST['id'] = $_GET['id'];
			if( $_POST['senha'] == $_POST['conf_senha'] ){	
				
				if( $_POST != 'senha' ){
					$_POST['senha'] = md5( $_POST['senha'] );
					unset( $_POST['conf_senha'] );
				}else{
					unset( $_POST['senha'] );
					unset( $_POST['conf_senha'] );
				}
				
			
				if( $this->salvar() ){
					$modulo = ucfirst( $this );
					header("location:admin.php?modulo=$modulo&acao=gerenciar");
				}
			}else{
				Mensagem::set( 'As senhas não conferem', 'error' );
			}
			
		}
	
		return $this->ver( " id = {$_GET['id']}" );
	}
	
	public function logar()
	{
		if( $_POST ){
			$_POST['senha'] = md5( $_POST['senha'] );
			$this->propriedades = $_POST;
			
			$onde = " email = '{$this->propriedades['email']}'"
					." and senha = '{$this->propriedades['senha']}'";
			
			$funcionario = $this->ver( $onde );
			
			if( $funcionario ) {
				$_SESSION['funcionarios']['nome'] = $funcionario->getNome();
				header('location:admin.php?modulo=Clientes&acao=gerenciar');
			} else {
				Mensagem::set( 'Dados incorretos', 'error' );
			}
		}
	}
	
	public function deslogar()
	{
		unset( $_SESSION['funcionarios'] );
		header('location:admin.php');
	}

}