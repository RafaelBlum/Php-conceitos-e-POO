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
            Mundo 1 - Variáveis
        </code>
    </h3>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center'><code>Exercício 1</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php
                        $tot = -10;
                        echo "<p class='text-muted'>Exercício .1 - Crie um algoritmo que receba um número digitado pelo
                                usuário e verifique se esse valor é positivo, negativo ou igual a zero.
                                A saída deve ser: 'Valor Positivo', 'Valor Negativo' ou 'Igual a Zero'" .
                            "</p>" . " Valor:: " . $tot;

                        echo "<br/><code>Utilize variáveis e IF</code>"
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-3">
                    <h3 class='alert alert-primary p-0 text-center'><code>RESULTADO</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php
                        $tot = -10;
                        if($tot >= 0){
                            echo "Valor Positivo";
                        }else{
                            echo "Valor Negativo";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
            <h3 class='alert alert-primary p-0 text-center'><code>Variável </code></h3>
            <div class="bg-light rounded text-muted p-3 shadow border-danger">
                <?php
                echo "<h2>'$'var = 'nome';</h2>";
                $nome = "Titulo";
                $sobrenome = "Sub-Titulo";
                $protocolo = "http://";
                $dominio = "www.corporatix.com.br";
                $site = "";


                $site = $protocolo .  $dominio;
                echo "<br/><code>" . $site . "</code>";
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