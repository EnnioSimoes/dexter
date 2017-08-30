<?php

namespace App\Model;

class Perfis extends AbstractModel
{
	protected $tabela = 'perfis';
	protected $propriedades = array(
								'id' => NULL,
								'descricao'	=> NULL,
							);
}