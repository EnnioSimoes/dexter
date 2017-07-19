<?php
	
	namespace Model;
	
	class Menus extends AbstractModel{
		protected $tabela = 'menus';
		
		protected $propriedades =  array( 'id' 			=> NULL,
										 'prf_id'		=> NULL,
										 'descricao' 	=> NULL,
										 'link'			=> NULL
		
									   );
	}