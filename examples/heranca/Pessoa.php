<?php

abstract class Pessoa{

    protected $nome;
    protected $idade;
    protected $sexo;
    protected $tipo;

    public final function fazerAniversario(){
        $this->idade ++;
    }

    public function getAvatar(){
        return "<img width='50' src='../../resource/img/user-".$this->tipo.".png' class='rounded-circle'/>";
    }

    public final function apresentar(){
        echo '<tr>
                <td>'.$this->getAvatar().'</td>
                <td>'.$this->nome.'</td>
                <td>'.$this->tipo.'</td>
                <td>'.$this->idade.'</td>
                <td class="text-primary">'.$this->sexo.'</td>
             </tr>';
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade . " De aniversário!!";
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

}