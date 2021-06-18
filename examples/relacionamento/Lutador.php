<?php

require_once 'User.php';

class Lutador implements User{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $forca = 100;
    private $altura, $peso, $categoria;
    private $vitorias, $derotas, $empates;

    public function __construct($n, $nc, $id, $al, $pe, $em, $vi, $de){
        $this->nome = $n;
        $this->nacionalidade = $nc;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derotas = $de;
        $this->empates = $em;
    }

    public function apresentar(){
        echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2'>
                    <div class='row'>
                        <div class='col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <img src='../../resource/img/lutador.png' class='w-100 float-right figure-img rounded-circle'/>
                        </div>
                        <div class='col-sm-10 col-md-10 col-lg-10 col-xl-10 bg-light'>".

            "O lutador ". $this->nome. ", com " . $this->idade. ", ". $this->altura. ", ".
            $this->nacionalidade. ", ". $this->vitorias. ", ". $this->derotas. ", ". $this->empates. " e pesando ".
            $this->peso. ": categoria: ". $this->categoria . "<div class='progress progress-sm'>
                                            <div class='progress-bar bg-success' style='width:". $this->forca."%"."'>".$this->forca ."</div>
                                        </div>"
            ."</div>
                    </div>
            </div>";
    }

    public function status()
    {

    }

    public function ganhaLuta($wins)
    {
        $this->vitorias += $wins;
    }

    public function perdeLuta($lose)
    {
        $this->derotas -= $lose;
    }

    public function empataLuta($draw)
    {
        $this->empates += $draw;
    }

    public function forca($sc)
    {
        $this->forca -= $sc;
    }

    //METODOS ESPECIAIS *********
    public function setPeso($peso)
    {
        $this->peso = $peso;
        if($peso < 50){
            $this->categoria = 'Invalida';
        }elseif($peso <= 70){
            $this->categoria = 'Leve';
        }elseif($peso <= 80){
            $this->categoria = 'medio';
        }elseif($peso <= 120){
            $this->categoria = 'pesado';
        }else{
            $this->categoria = 'Invalida';
        }
    }

    public function getForca()
    {
        return $this->forca;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    public function getDerotas()
    {
        return $this->derotas;
    }
    public function setDerotas($derotas)
    {
        $this->derotas = $derotas;
    }
    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}