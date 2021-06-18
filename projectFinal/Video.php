<?php
require_once 'AcoesVideo.php';

class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $view;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->reproduzindo = false;
    }

    public function movie(){
        $acao = "pause";

        if($this->getReproduzindo() == true){
            $acao = "play";
        }

        echo '
            <img src="../resource/img/'. $acao .'.jpg" alt="video img" class="img-fluid" style="border-radius: 5px;"/>
            <div class="d-flex bg-warning mv-text justify-content-start align-items-center">
                    <div><code>' .$this->titulo . '</div> <span><i class="fas fa-thumbs-up ml-4 mr-2"></i> '. $this->getCurtidas() . " |  <i class='far fa-eye mr-2'></i>" . $this->getView() . " | Avaliações ". $this->getAvaliacao() .'</code> </span>
            </div>
        ';
    }


    public function play(){
        $this->reproduzindo = true;
    }

    public function pause(){
        $this->reproduzindo = false;
    }

    public function like(){
        $this->curtidas ++;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao){
        if($this->view != 0){
            $this->avaliacao = ($this->avaliacao + $avaliacao) / $this->view;
        }else{
            $this->avaliacao += $avaliacao;
        }

    }

    public function getView(){
        return $this->view;
    }

    public function setView($view){
        $this->view += $view;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }


}