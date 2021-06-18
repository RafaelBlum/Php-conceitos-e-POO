<?php
require_once 'Mamifero.php';

class Lobo extends Mamifero{

    public function reagirFrase($frase){
        if($frase == "comida" || $frase == "ola"){
            echo '<br><div class="badge badge-success p-2 mb-1">Abanar rabo e latir</div>';
        }else{
            echo '<br><div class="badge badge-danger p-2 mb-1">Rosnar</div>';
        }

    }

    public function reagirHoraDia($hora){
        if($hora < 12){
            echo '<br><div class="badge badge-success p-2 mb-1">Abanar</div>';
        }elseif($hora > 12 && $hora < 18){
            echo '<br><div class="badge badge-danger p-2 mb-1">abanar e latir</div>';
        }else{
            echo '<br><div class="badge badge-danger p-2 mb-1">ignorar</div>';
        }
    }

    public function reagirDono($dono){
        if($dono == true){
            echo '<br><div class="badge badge-success p-2 mb-1">abanar</div>';
        }else{
            echo '<br><div class="badge badge-danger p-2 mb-1">Rosnar e latir</div>';
        }

    }

    public function reagirIdadePeso($idade, $peso){
        if($idade < 18){
            if($peso < 50){
                echo '<br><div class="badge badge-success p-2 mb-1">abanar</div>';
            }else{
                echo '<br><div class="badge badge-danger p-2 mb-1">latir</div>';
            }
        }else{
            if($peso > 50){
                echo '<br><div class="badge badge-success p-2 mb-1">Rosnar</div>';
            }else{
                echo '<br><div class="badge badge-danger p-2 mb-1">Ignorar</div>';
            }
        }
    }

}