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
            Mundo 4 - Condicionais
        </code>
    </h3>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center'><code>Condicionais</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php
                        echo "<h3>IF ELSE - Operador ternários</h3>";

                        $minhaidade = 69;
                        $idadeCrianca = 12;
                        $idadeMaior = 18;
                        $idadeMelhor = 65;

                        if($minhaidade <= $idadeCrianca){
                            echo "<h3>Você é criança!.</h3>";
                            echo ($minhaidade < 10 ? "Criança" : "Adolecente");
                        }elseif($minhaidade <= $idadeMaior){
                            echo "<h3>Você é adulto!.</h3>";
                            echo ($minhaidade < 15 ? "Quase adulto" : "Adulto");
                        }elseif($minhaidade <= $idadeMelhor){
                            echo "<h3>Você é da melhor idade.</h3>";
                            echo ($minhaidade < 45 ? "Meia idade" : "Aposentado - melhor idade!");
                        }else{
                            echo "<h3>É velho!.</h3>";
                            echo ($minhaidade < 80 ? "Esta nos 45 min. do segundo tempo, heim!" : "Nossa, ainda vivo?!!");
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-3">
                    <h3 class='alert alert-primary p-0 text-center'><code> JSON</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <h3 class='alert alert-primary p-0 text-center'><code>Condicionais 2</code></h3>
            <div class="bg-light rounded text-muted p-3 shadow border-danger">
                <?php
                echo "<h3>Condicionais - part 2</h3>";
                date_default_timezone_set('America/Sao_Paulo');

                echo "<h3>Switch case</h3>";
                $data = date('w');

                switch($data){
                    case 0:
                        echo "Domingo";
                        break;
                    case 1:
                        echo "Segunda";
                        break;
                    case 2:
                        echo "Terça";
                        break;
                    case 3:
                        echo "Quarta";
                        break;
                    case 4:
                        echo "Quinta";
                        break;
                    case 5:
                        echo "Sexta";
                        break;
                    case 6:
                        echo "Sabado";
                        break;
                    default:
                        echo "Inexistem...";
                }


                echo "<h3>for</h3>";
                $tot = 8;
                echo "<h4>Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado" . "</h4>" . " Valor:: " . $tot . "<br/>";
                for($i = 0; $i <= 10; $i++){
                    echo $i . " * ". $tot. " = ". $i*$tot. "<br/>";
                }

                echo "<select>";
                for($i =date('Y'); $i >= date('Y')-100; $i--){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                echo "</select>";
                echo "<h3>foreach</h3>";

                $lista = array("Cria projeto", "authenticar", "controllers", "rotas", "model", "helpers", "servers");

                foreach($lista as $key => $tipo){
                    echo "<div style='background='blue;''>".  $tipo. ' posição: '. $key. "</div"."<br/>";
                }

                echo "<h3>while</h3>";
                $condicao = true;



                while($condicao){
                    $num = rand(1, 10);

                    if($num === 3){
                        echo "TRES!";
                        $condicao = false;
                    }

                    echo $num . "<br/>";
                }


                echo "<h3>Do WHILE</h3>";

                $total = 100;
                $desconto = 0.9;

                do{
                    $total *= $desconto;
                }while($total > 100);

                echo $total."%";


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