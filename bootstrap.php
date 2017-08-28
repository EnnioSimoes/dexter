<?php
	
require 'config/config.php';
session_start();

function autoloader( $classe ){
	$classe = str_replace('\\', '/', $classe );
	#Model/Clientes.class.php || trat.php
	foreach ( array( 'class.php', 'trait.php' ) as $extensao ){
		// dd("src/$classe.$extensao", 1);
		if( file_exists( "src/$classe.$extensao" ) ){
			// ex. src/Controller/Controller.class.php
			require_once "src/$classe.$extensao";
		}
	}
	
}

spl_autoload_register('autoloader');