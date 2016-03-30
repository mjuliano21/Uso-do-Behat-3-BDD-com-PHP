<?php

class Venda {
  
	private $estoque;
	private $qtdVendida;
  
public function __construct($estoqueInicial)
{
	$this->estoque = $estoqueInicial;
}
  
public function comprou($qtdVendida)
{
	if(($this->estoque - $qtdVendida) < 0){
		throw new Exception('Quantidade vendida e maior que estoque atual');
	}
	$this->estoque -= $qtdVendida;
}
  
public function totalEstoque()
{
	return $this->estoque;

}
}