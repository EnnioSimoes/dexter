<?php 
	if( !isset( $_SESSION['funcionarios'] ) ) {
	  	header( 'location:admin.php?modulo=Funcionarios&acao=logar');
	}else{
		header( 'location:admin.php?modulo=Clientes&acao=gerenciar');
	} 