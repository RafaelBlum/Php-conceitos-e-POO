<?php
require_once 'Mamifero.php';

class Canguru extends Mamifero{

    public function usarBolsa(){
        echo '<br><div class="badge badge-warning p-2 mb-1">Bolsa para filhotes</div>';
    }

    public function locomover(){
        echo '<br><div class="badge badge-warning p-2 mb-1">Animal se locomove pulando</div>';
    }

}