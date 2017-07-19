<?php
	
	namespace Model;
	
	interface ModelBase {
		
	
		function excluir();
		function listar();
		function ver( $onde );
		
		function __construct();
		function __destruct();
		function __toString();
		function __call( $metodo, $parametro );
	
	}