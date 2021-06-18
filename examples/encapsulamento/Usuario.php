<?php

interface Usuario {
    public function abrirConta($tipo);
    public function fecharConta();
    public function depositar($saldo);
    public function sacar($valor);
    public function pagarMensal($tipo);
    public function user();
}