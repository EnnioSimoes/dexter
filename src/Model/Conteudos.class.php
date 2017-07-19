<?php
	
	namespace Model;
	
	class Conteudos extends AbstractModel{
		
		protected $tabela = 'conteudos';
		protected $propriedades = array( 'id'			=> NULL,
										 'titulo'		=> NULL,
										 'texto'		=> NULL,
										);
	}