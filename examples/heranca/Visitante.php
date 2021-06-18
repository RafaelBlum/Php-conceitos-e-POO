<?php
require_once 'Pessoa.php';

class Visitante extends Pessoa{

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo);
        $this->tipo = get_class($this);
    }

}