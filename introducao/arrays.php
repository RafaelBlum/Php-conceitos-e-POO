<!DOCTYPE html>
<html lang="pt-br">

<?php
include "../parts/topo.php";
?>

<body>

<?php
include "../parts/header.php";
?>

<div class="container">
    <h3 class='alert alert-dark mt-4'>
        <code>
            <img src="../resource/img/planeta.png" class="medlogo">
            Mundo 5 - Arrays
        </code>
    </h3>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center'><code>Arrays simples</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php
                        $texto = array("abacaxi", "melão", "laranja");
                        print_r($texto);

                        echo "<br/><code> última posição é: " . end($texto). "</code>" ;
                        echo "<br/>";
                        array_push($texto, "Abacate");
                        print_r($texto);
                        echo "<br/>Add: <code>O última é: " . end($texto) .  " e primeiro ". reset($texto) . "</code>";
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-3">
                    <h3 class='alert alert-primary p-0 text-center'><code> JSON</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php
                        $json = '[{"nome": "RafaBlum", "idade": 41},{"nome": "EricBlum", "idade": 23}]';
                        $data = json_decode($json);
                        // ARRAY: $data = json_decode($json, true);
                        var_dump($data);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <h3 class='alert alert-primary p-0 text-center'><code>Add Arrays - array_push </code></h3>
            <div class="bg-light rounded text-muted p-3 shadow border-danger">
                <?php
                $pessoas = array();
                array_push($pessoas, array(
                    'nome'=> "Rafael",
                    'salario'=> 1500.90
                ));

                array_push($pessoas, array(
                    'nome'=> "Lisa",
                    "salario"=> 3320.80
                ));

                print_r($pessoas);
                echo "<br/><code>Aumento de 10% no salario foi:</code><br/>";

                foreach($pessoas as $i=> $p){
                    $aumento = $pessoas[$i]['salario'];
                    $tot_aumento =  $aumento * 10 /100;
                    $pessoas[$i]['salario'] += $tot_aumento;
                }

                print_r($pessoas);
                $numero = array(1, 20, 30, 12);
                echo "<br/><code>Funções array [1, 20, 30, 12]</code>";
                    echo "<br/>Total elementos array: " . count($numero);
                    echo "<br/>Valor inteiro array: " . sizeof($numero);
                    echo "<br/>Ultimo array: " . end($numero);
                    echo "<br/>Primeiro array: " . reset($numero);
                    echo "<br/>prev array: " . prev($numero);
                    echo "<br/>next array: " . next($numero);
                    echo "<br/>pos array: " . pos($numero);
                    echo "<br/>key array: " . key($numero);
                    echo "<br/>each array: " . each($numero);
                    echo "<br/>shuffle array: " . shuffle($numero) . " " . end($numero);
                    echo "<br/>sort array: " . sort($numero) . " " . end($numero);
                ?>
            </div>
        </div>


        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">

        </div>
    </div>






</div>

    <script type="text/javascript" src="../resource/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../resource/popper.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap.min.js"></script>

    <script src="../resource/js/script.js"></script>
</body>
</html>
