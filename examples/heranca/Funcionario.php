<?php
require_once "Pessoa.php";

class Funcionario  extends Pessoa{
    private $setor;
    private $trabalhando;

    public function __construct($nome, $idade, $sexo, $setor, $trabalhando){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo);
        $this->tipo = get_class($this);
        $this->$setor = $setor;
        $this->$trabalhando = $trabalhando;
    }

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
        echo '<tr>
                <td><div class="badge badge-success p-2">Mudando do trabalho funcionário ' . $this->nome . '</div></td>
             </tr>';
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }


}