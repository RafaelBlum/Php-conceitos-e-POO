<?php
require_once "Pessoa.php";

class Professor extends Pessoa{

    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo);
        $this->tipo = get_class($this);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($valor){
        $this->salario += $valor;
        echo '<tr>
                <td><div class="badge badge-success p-2">Aumento no salario! Totalizando: R$ '. $this->salario. " para " . $this->nome . '</div></td>
             </tr>';
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }


}