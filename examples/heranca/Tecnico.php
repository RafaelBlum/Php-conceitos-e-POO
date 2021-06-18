<?php
require_once 'Aluno.php';

class Tecnico extends Aluno{
    private $registro;

    public function __construct($nome, $idade, $sexo, $registro){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo);
        $this->tipo = get_class($this);
        $this->registro = $registro;
    }

    public function pratica(){
        echo '<tr>
                <td><div class="badge badge-dark p-2">Tecnico '. $this->nome . ", de registro " . $this->registro .'</div></td>
             </tr>';
    }

    public function pagarMensalidade(){
        echo '<tr>
                <td><div class="badge badge-success p-2">Mensalidade tecnica paga por ' . $this->nome .'</div></td>
             </tr>';
    }

    public function getRegistro()
    {
        return $this->registro;
    }

    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }

}