<?php
require_once 'Animal.php';

class Mamifero extends Animal{

    private $corPelo;

    public function __construct($corPelo, $peso, $idade, $menbros){
        $this->corPelo = $corPelo;
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $menbros;
    }

    public function showAnimal(){
        echo '<code>'. "Cor do pelo ". $this->corPelo . ", peso ". $this->peso . ", Idade ". $this->idade . " e total de membros ". $this->membros .'</code>';
    }

    public function tipoAnimal(){
        echo '<code>'. get_class($this) .'</code>';
    }

    public function locomover(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal se locomove na terra</div>';
    }

    public function alimentar(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal se alimenta com leite e carne</div>';
    }

    public function emitirSom(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal rosna...</div>';
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

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }


}