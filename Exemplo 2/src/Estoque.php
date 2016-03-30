<?php

class Estoque {
  
	private $estoque;
  
public function __construct($estoqueInicial)
{
	$this->estoque = $estoqueInicial;
}
  
public function retirou($qtdRetirada)
{
	if(($this->estoque - $qtdRetirada) < 0){
		throw new Exception('Quantidade de coco cola retirada e maior que estoque atual');
	}
	$this->estoque -= $qtdRetirada;
}
  
public function totalEstoque()
{
	return $this->estoque;

}
}