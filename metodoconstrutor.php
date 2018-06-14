<?php

Class Endereco{
    private $logadouro;
    private $numero;
    private $cidade;


    public function __construct($a, $b, $c){
        $this->logadouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __destruct(){
        var_dump("Saiu");
    }
    public function __toString(){

        return $this->logadouro.','.$this->numero.','.$this->cidade;

    }
}

$teste = new Endereco('Rua fredo', '536', 'SG');

echo $teste;
?>