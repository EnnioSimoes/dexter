<?php
	
namespace App\Lib;

class DataMapper
{
	private $st; 
	#Todos os métodos recebem um objeto como parametro
	function inserir( $objeto )
	{
		#insert into tabela(campos) valores();
		foreach ( $objeto->getAtributos() as $campo => $valor ){
			$campos[] 	= $campo;
			$valores[] 	= $valor;
			$holders[]	= '?'; 
		}
		
		$campos		= implode( ',', $campos);
		$holders 	= implode( ',', $holders );
		$sql = "INSERT INTO $objeto ( $campos ) VALUES( $holders )";
		$this->st = $this->conexao->prepare( $sql );
		return $this->st->execute( $valores );
	}
	
	function atualizar( $objeto )
	{
		foreach ( $objeto->getAtributos() as $campo => $valor ){
				$sets[] 	= "$campo=?";
				$valores[] 	= $valor;
		}
		$valores[] = $objeto->getId();
		$sets = implode( ',', $sets );
		$sql = "UPDATE $objeto set $sets WHERE id = ?";
		$this->st = $this->conexao->prepare( $sql );
		return  $this->st->execute( $valores );
		
		
	}
	
	function deletar( $objeto )
	{
		$sql = "DELETE FROM $objeto WHERE id = {$objeto->getId()}";
		return $this->conexao->query( $sql );
	}
	
	function listarTodos( $objeto, array $parametros = NULL )
	{
		# campo => valor
		$sql = "SELECT * FROM $objeto";
		
		if( $parametros ){
			$sql .= " WHERE {$parametros['campo']} = '{$parametros['valor']}'";
		}
				
		return $this->conexao->query( $sql )->fetchAll( \PDO::FETCH_ASSOC );
	}
	
	function selecionar( $objeto, $onde )
	{
		$sql = "SELECT * FROM $objeto WHERE $onde";
		return $this->conexao->query( $sql )->fetch( \PDO::FETCH_ASSOC );
	}
}