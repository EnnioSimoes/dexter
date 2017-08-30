<?php

	namespace App\Model;
	
	class Clientes extends AbstractModel
	{
		protected $tabela = 'clientes';
		protected $propriedades = array( 
									'id' => NULL,
									'cpf_cnpj' => NULL,
									'nome_razao' => NULL,
									'email' => NULL,
									'telefone' => NULL
								);
	}
	
