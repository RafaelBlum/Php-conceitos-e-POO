<?php
require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $bolsa){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo);
        $this->tipo = get_class($this);
        $this->bolsa = $bolsa;
    }

    public function renovaBolsa(){
        $this->bolsa  = ! $this->bolsa;
        echo '<tr>
                <td><div class="badge badge-warning p-2">Bolsa renovada com sucesso!! '. " - " . $this->nome . '</div></td>
             </tr>';
    }

    public function pagarMensalidade(){
        echo '<tr>
                <td><div class="badge badge-success p-2">Aluno bolsista ' . $this->nome . ", tem desconto na mensalidade " .'</div></td>
             </tr>';
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }

}