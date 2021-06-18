<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero{

    public function enterraOsso(){
        echo '<br><div class="badge badge-warning p-2 mb-1">Animal enterra seus ossos</div>';
    }

    public function abanaRabo(){
        echo '<br><div class="badge badge-warning p-2 mb-1">Animal abanando rabo!</div>';
    }
}