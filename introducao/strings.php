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
            Mundo 2 - Strings
        </code>
    </h3>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <h3 class='alert alert-primary p-0 text-center'><code>Strings</code></h3>
            <div class="bg-light rounded text-muted p-3 shadow">
                <?php
                include "parts/header.php";
                define('NOME', 'CONSTANTES PHP');
                define('BANCO', [
                    "dominio"=>'126.12.7',
                    "usuer"=>'root',
                    "password"=>'1234',
                    "nomeBanco"=>'corporatix',
                    "versão_PHP"=> PHP_VERSION
                ]);
                echo NOME . "<br/>";
                print_r(BANCO);

                echo "<h1>Funções de strings</h1><br/>";
                $nome = "Rafael blum";

                echo strtoupper($nome) . "<hr/>";
                echo strtolower($nome) . "<hr/>";
                echo ucfirst($nome) . "<hr/>";
                echo ucwords($nome) . "<hr/>";
                echo str_replace("a","1", $nome);

                echo "<h1>funções com letras</h1><br/>";
                $frase = "Corporatix sua intranet do futuro.";
                $q = strpos($frase, "do");
                echo "Posição da letra: " . $q . "<hr/>";

                $texto = substr($frase, 0 , $q);
                echo $texto . "<hr/>";

                $busca = "futuro";
                echo $texto2 = substr($texto, $q + strlen($busca), strlen($texto)) . '<br/>';



                include "parts/topo.php";
                ?>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="../resource/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="../resource/popper.min.js"></script>
<script type="text/javascript" src="../resource/bootstrap.min.js"></script>

<script src="../resource/js/script.js"></script>
</body>
</html>