<?php

require_once '../../poo/encapsulamento/Usuario.php';

class Pessoa implements Usuario{

    private $numConta;
    protected $tipo;
    private $nome;
    private $genero;
    private $saldo;
    private $status;

    public function __construct($nome, $sexo){
        $this->nome = $nome;
        $this->genero = $sexo;
        $this->saldo = 0;
    }

    public function  abrirConta($tipo){
        $this->numConta = rand(5, 5);

        if($this->tipo == null){
            if($tipo == "CC"){
                $this->tipo = $tipo;
                $this->saldo = 50;
                $this->status = true;
                $this->pagarMensal($this->tipo);
                return "Conta criada pelo usuário ". $this->nome . " do tipo " . $this->tipo;
            }elseif($tipo == "CP"){
                $this->tipo = $tipo;
                $this->saldo = 150;
                $this->status = true;
                $this->pagarMensal($this->tipo);
                return "Conta criada pelo usuário ". $this->nome . " do tipo " . $this->tipo;
            }else{
                $this->status = false;
                return "Conta não criada para usuário ". $this->nome;
            }
        }

    }

    public function fecharConta(){
        if($this->saldo > 0 || $this->saldo < 0){
            return "<div class='text-danger'>Conta de ". $this->nome. " não pode ser fechada, pois ainda existem saldos disponiveis de R$ " . $this->saldo ."</div>";
        }

        $this-> status = false;
        $this->numConta = null;
        return "Conta finalizada com sucesso";
    }

    public function depositar($saldo){
        if($this->status == true){
            $this->saldo += $saldo;
            return "<div class='text-success'>Deposito de ". $this->saldo. " na conta de" . $this->nome ."</div>";
        }

        return "<div class='text-danger'>Você não pode desitar saldo na conta de ". $this->nome. ", pois não tem conta em aberto!</div>";
    }

    public function sacar($valor){
        if($this->status == true){
            if($this->saldo >= $valor){
                $this->saldo -= $valor;
                return "<div class='text-success'>Retirada de R$ ". $valor. " foi feita com sucesso</div>";
            }
        }
        return "<div class='text-danger'>Você não pode sacar esta quantia de R$ ".  $valor ."</div>";

        //CONTA ABERTA
        //TER SALDO SE SACA 1000, PRECISA TER 1000 OU MAIS
    }

    public function pagarMensal($tipo){
        if($tipo == "CC"){
            $this->saldo -= 12;
        }elseif($tipo == "CP"){
            $this->saldo -= 20;
        }
    }

    private function dadoConta(){
        if($this->numConta != null){
            if($this->tipo == "CC"){
                $tipo = "Conta Corrente";
            }else{
                $tipo = "Conta Poupança";
            }
            return "<div class='badge badge-warning'>".
                "Conta nº " .$this->numConta. " - " . $tipo . " Status: Aberta"
            . "</div>";
        }
        return "<div class='badge badge-danger'>
                Sem conta bancária criada
            </div>";
    }

    public function user(){
        echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 m-1'>
                    <div class='row'>
                        <div class='col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <img src='../../resource/img/user-".$this->genero.".png' class='w-100 float-right figure-img rounded-circle'/>
                        </div>
                        <div class='col-sm-10 col-md-10 col-lg-10 col-xl-10 bg-light'>".

                            $this->nome . " - Saldo: " . $this->saldo. "<br>" .
                            $this->dadoConta()
                        ."</div>
                    </div>
            </div>";
    }

    /*METODOS ESPECIAIS*/

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}