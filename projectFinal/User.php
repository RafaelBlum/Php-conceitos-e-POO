<?php
require_once 'Pessoa.php';

class User extends Pessoa{
    private $login;
    private $totAssistido = 0;

    public function __construct($nome, $idade, $sexo, $exp, $login){
        parent::__construct($nome, $idade, $sexo, $exp);
        $this->login = $login;
    }

    public function viuMaisUm(){
        $this->totAssistido ++;
        echo "<code>Total assistidos ( " . $this->getTotAssistido() . " )</code>";
    }

    public function user(){

        echo '  <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <img src="../resource/img/user-Aluno.png" alt="video img" class="img-fluid"/>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
                     <div>Nome ['.  $this->getNome() .'</div>
                     <div>Idade ['.  $this->getIdade() .'</div>
                     <div>Sexo ['.  $this->getSexo() .'</div>
                     <div>Experiencia ['.  $this->getExperiencia() .'</div>
                     <div class="d-inline-flex bg-warning">' .
                            ' Login [ ' . $this->getLogin()
                    .' ] </div>
                     <div class="d-inline-flex bg-warning">' .
                             ' Videos assistidos  [ ' . $this->getTotAssistido()
                        .' ] </div>
                </div>';
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido += $totAssistido;
    }

}