<?php
require_once 'Animal.php';

class Ave extends Animal{

    private $corPena;

    public function __construct($cor, $peso, $idade, $menbros){
        $this->corPena = $cor;
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $menbros;
    }

    public function showAnimal(){
        echo '<code>'. "Cor das penas ". $this->corPena . ", peso ". $this->peso . ", Idade ". $this->idade . " e total de membros ". $this->membros .'</code>';
    }

    public function tipoAnimal(){
        echo '<code>'. get_class($this) .'</code>';
    }

    public function locomover(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal vooa</div>';
    }

    public function alimentar(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal se alimenta por sementes</div>';
    }

    public function emitirSom(){
        echo '<br><div class="badge badge-success p-2 mb-1">Animal pia</div>';
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

    public function getCorPena()
    {
        return $this->corPena;
    }

    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }

}