<?php
require_once "Pessoa.php";

class Aluno extends Pessoa{

    private $matricula;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo);
        $this->tipo = get_class($this);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }


    public function cancelaMatricula(){
        echo '<tr>
                <td><div class="badge badge-danger p-2">Matricula cancelada! do usuário ' . $this->nome . '</div></td>
             </tr>';
    }

    public function pagarMensalidade(){
        echo '<tr>
                <td><div class="badge badge-success p-2">Matricula paga do aluno ' . $this->nome . " - " . $this->curso . '</div></td>
             </tr>';
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

}