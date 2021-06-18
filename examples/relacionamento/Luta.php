<?php

require_once 'Lutador.php';

class Luta {

    private $desafiante;
    private $desafiado;

    public function lutar($l1, $l2){
        $this->desafiante = $l1;
        $this->desafiado = $l2;

        $i = rand(0, 100);
        $x = rand(0, 100);

        $this->desafiante->forca($i);
        $this->desafiado->forca($x);

        $this->desafiante->apresentar();
        $this->desafiado->apresentar();

        if($this->desafiante->getForca() > $this->desafiado->getForca()){
            return '<div class="alert alert-success p-2 mt-3">'. 
                    '<img src="../../resource/img/medalha.png" class="med mr-3"/>' 
                    ."Vencedor foi " . 
                                    $this->desafiante->getNome() 
                    . " com energia de ".
                                    $this->desafiante->getForca() 
                .'</div>';
        
        }if ($this->desafiante->getForca() < $this->desafiado->getForca()) {
            $vencedor = $this->desafiado->getNome();
            return '<div class="alert alert-success p-2 mt-3">'. 
                    '<img src="../../resource/img/medalha.png" class="med mr-3"/>' 
                    ."Vencedor foi " . 
                                    $this->desafiado->getNome() 
                    . " com energia de ".
                                     $this->desafiado->getForca() 
                .'</div>';
        } else {
            return '<div class="alert alert-danger p-2 mt-3">Houve um empate tecnico!</div>';
        }
        
        

        return '<div class="alert alert-success p-2 mt-3">'. "Vencedor foi " . $this->desafiante->getNome() .'</div>';
    }
}