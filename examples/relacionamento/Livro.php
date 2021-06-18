<?php

require_once 'Publicacao.php';

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $leitor, $totPagina){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->leitor = $leitor;
        $this->totPaginas = $totPagina;
    }

    //**** : METODO ENCAPSULADOS DA INTERFACE
    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function folhear($i){
        if($this->aberto == true){
                if($i == 1 ){
                    $this->pagAtual += $i;
                }else{
                    if($i > $this->pagAtual ){
                        $this->pagAtual = 0;
                    }else{
                        $this->pagAtual -= $i;
                    }
                }
        }else{
            return '<div class="badge badge-danger">Seu livro não esta aberto...</div><br>';
        }

    }

    public function avancarPagina(){
        $this->folhear(1);
        return '<div class="badge badge-success">'. "Pagina atual do livro é " . $this->pagAtual .'</div><br>';
    }

    public function voltarPagina(){
        $this->folhear(-1);
        return '<div class="badge badge-success">'. "Pagina atual do livro é " . $this->pagAtual .'</div><br>';
    }

    public function detalhes(){
        return '<div class="alert alert-success p-2 mt-3">'. 
        '<img src="../../resource/img/planeta.png" class="med mr-3"/>' 
        ."Leitor " . 
                        $this->leitor->getNome()
        . " paginas de leitura foram ".
                        $this->pagAtual 
    .'</div>';
    }

    //METODO ESPECIAIS
    public function setTitulo($titulo){
        return $this->titulo = $titulo;
    }
    public function setAutor($autor){
        return $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas){
        return $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($pagAtual){
        return $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto){
        return $this->aberto = $aberto;
    }
    public function setLeitor($leitor){
        return $this->leitor = $leitor;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }


}


