<?php
require_once("pessoa.class.php");

class Teste{
	private $pessoa;

	public function __construct(){
		$pessoa = new Pessoa();

		$pessoa ->setNome("Ester Leonardo");
		echo $pessoa->getNome();

		echo '<hr>';

		$pessoa->setEndereco("Rua Sancho Junqueira 691");
		echo $pessoa->getEndereco();

		echo '<hr>';

		$pessoa->setBairro("Vila Rio Branco");
		echo $pessoa->getBairro();

        echo '<hr>';

        $pessoa->setCep ("03875 000");
		echo $pessoa->getCep();
		
        echo '<hr>';

        $pessoa->setCidade ("São Paulo");
		echo $pessoa->getCidade();
		
        echo '<hr>';

        $pessoa->setEstado ("SP");
		echo $pessoa->getEstado();
		
        echo '<hr>';





	}
}new Teste();


