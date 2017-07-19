<?php
	
	namespace View;
	
	use Model\Menus;
	class View{
	
		static function carregar( $arquivo, $tipo, $dados = NULL ){
			
			$arquivo = strtolower( $arquivo );
			
			$pathArquivo = __DIR__."/../../templates/$tipo/$arquivo.tpl.php";
			
			$obj_menu = new Menus();
			$parametros = array( 'campo' => 'prf_id', 'valor' => $tipo);
			$itens_menu = $obj_menu->listar( $parametros );
				
			require_once __DIR__."/../../templates/$tipo/_cabecalho.tpl.php";
			if( file_exists( $pathArquivo ) ){
				require_once $pathArquivo;
			}else{
				echo "<h3> $pathArquivo : View não localizada</h3>";
			}
			require_once __DIR__."/../../templates/$tipo/_rodape.tpl.php";
		}
	}
