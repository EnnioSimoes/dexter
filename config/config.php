<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);	

// Diretorio publico
define('PATH', './public/');

// Prefixo do projeto
define('PREFIX', 'App\\');

// Funcao Debug
function dd($var, $die = false) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	($die) ?: die();
}

// Configuracoes do banco
$config = array('driver'  => 'mysql',
				'host'	  => '172.17.0.1',
				'base'	  => 'dexter',
				'user'    => 'root',
				'pass'    => 'root'
			);