<?php
	
define( 'PATH', './public/' );

function dd($var, $die = false) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	($die) ?: die();  
}

$config = array('driver'  => 'mysql',
				'host'	  => '192.168.99.100',
				'base'	  => 'dexter501',
				'user'    => 'root',
				'pass'    => 'root'
			);