<?php

	
	namespace Model;
	
	
	class Banners extends AbstractModel{
		
		protected $tabela = 'banners';
		
		protected $propriedades = array( 'id' => NULL,
										 'descricao' => NULL,
										 'imagem'    => NULL			
										);
	
	}