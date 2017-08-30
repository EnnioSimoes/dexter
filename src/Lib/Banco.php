<?php

namespace App\Lib;
use App\Lib\DataMapper;

final class Banco extends DataMapper
{
	protected $conexo;
	static protected $objconexao;

	static function getInstancia(){
		if( !self::$objconexao ){
			self::$objconexao = new Banco();
			self::$objconexao->conectar();
		}
		
		return self::$objconexao;
	}
	
	private function __construct(){}
	
	final private function conectar(){
		
		global $config;
		$dsn 	=  "{$config['driver']}:host={$config['host']};"
		."dbname={$config['base']}";
		try{
			$this->conexao = new \PDO($dsn, $config['user'], $config['pass'] );
			$this->conexao->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
		}catch ( \Exception $err ){
			echo $err->getMessage();
		}
		
	}
		
	final public function desconectar(){
			unset( $this->conexo );	
	}
}