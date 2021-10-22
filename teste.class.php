<?php

require_once('pessoa.class.php');

class Teste {
    private $pessoa;

    public function __construct () {
        $pessoa = new Pessoa();

        $nome = 'Jefferson Oliveira';
        $endereco = 'Rua Nova Bassamo';
        $bairro = 'Itaquera';
        $cep = '08240-220';
        $cidade = 'São Paulo';
        $estado = 'São Paulo';

        $pessoa->setNome($nome);
        $pessoa->setEndereco($endereco);
        $pessoa->setBairro($bairro);
        $pessoa->setCep($cep);
        $pessoa->setCidade($cidade);
        $pessoa->setEstado($estado);

        $pessoaArray = [$pessoa->getNome(), $pessoa->getEndereco(), $pessoa->getBairro(), $pessoa->getCep(), $pessoa->getCidade(), $pessoa->getEstado()];
        
        for ($i=0; $i < count($pessoaArray); $i++) {
            echo $pessoaArray[$i];
            echo '<hr>';
        }
    }
}

new Teste();

?>