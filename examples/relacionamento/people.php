<?php

class people {
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($n, $i, $s){
        $this->nome = $n;
        $this->idade = $i;
        $this->setSexo($s);
    }

    public function quemSou(){
        return '<div class="alert alert-warning p-2">'. 
        'Meu nome é '. $this->nome .
        ', e tenho '. $this->idade .
        " [" . $this->sexo . "]" 
        .'</div>';
    }

    public function fazerAniversario(){
        $this->idade += 1;
        return '<div class="alert alert-success p-2">meu aniversário é hoje e tenho '. $this->idade .' anos.</div>';
    }

    public function setSexo($sexo){
        if($sexo == 'm' || $sexo == 'M'){
            $this->sexo = "Masculino";
        }elseif ($sexo == 'f' || $sexo == 'F') {
            $this->sexo = "Feminino";
        } else {
            $this->sexo = "Não foi definido";
        }
    }

    public function getNome(){
        return $this->nome;
    }

}