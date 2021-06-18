<?php
require_once 'Video.php';
require_once 'User.php';

class Visualizacao {
    private $video;
    private $usuario;

    function __construct($video, $usuario){
        $this->video = $video;
        $this->usuario = $usuario;
    }

    public function getVideo(){
        return $this->video;
    }

    public function setVideo($video){
        $this->video = $video;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function avalia(){
        $this->video->setAvaliacao(5);
    }
    public function avaliaNota($nota){
        $this->video->setAvaliacao($nota);
    }
    public function avaliaPorcent($porc){
        $nota = 0;

        if($porc <= 30){
            $nota = 5;
        }elseif($porc <= 50){
            $nota = 6;
        }elseif($porc <=80){
            $nota = 8;
        }else{
            $nota = 10;
        }

        $this->video->setAvaliacao($nota);
    }


}