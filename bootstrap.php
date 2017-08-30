<?php	
require 'config/config.php';
session_start();

/**
 * AUTOLOAD
 *
 * @param string $class O nome da classe fully-qualified.
 * @return void
 */
function appAutoloader($class) {

	// Diretorio base para o prefixo namespace 
    $base_dir = __DIR__ . '/src/';
	
    // A classe usa o prefixo do namespace?
    $len = strlen(PREFIX);
    if (strncmp(PREFIX, $class, $len) !== 0) {
		// Nao, move para o proximo autoloader registrado
        return;
    }
	
    // Pega o nome da classe relativa (Sem prefixo)
    $relative_class = substr($class, $len);
	
    // Substitui o prefixo do namespace pelo diretório base, replace namespace
	// Substitui os separadores do namespace por separadores de diretório do nome relativo da classe, 
	// acrescentando .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Se arquivo extistir ele é requerido
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('appAutoloader');