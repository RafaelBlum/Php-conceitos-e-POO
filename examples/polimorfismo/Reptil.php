<?php
require_once 'Animal.php';

class Reptil extends Animal{

    private $corEscama;

    public function __construct($cor, $peso, $idade, $menbros){
        $this->corEscama = $cor;
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $menbros;
    }

    public function showAnimal(){
        echo '<code>'. "Cor da escama ". $this->corEscama . ", peso ". $this->peso . ", Idade ". $this->idade . " e total de membros ". $this->membros .'</code>';
    }

    public function tipoAnimal(){
        echo '<code>'. get_class($this) .'</code>';
    }

    public function locomover(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal rasteja na terra</div>';
    }

    public function alimentar(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal se alimenta com carne vegetais</div>';
    }

    public function emitirSom(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal chia...</div>';
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getMembros()
    {
        return $this->membros;
    }

    public function setMembros($membros)
    {
        $this->membros = $membros;
    }

    public function getCorEscama()
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

}