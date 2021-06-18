<?php

interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($i);
    public function avancarPagina();
    public function voltarPagina();

}