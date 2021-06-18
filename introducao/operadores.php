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
            Mundo 3 - Operadores
        </code>
    </h3>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <h3 class='alert alert-primary p-0 text-center'><code>Operadores</code></h3>
            <div class="bg-light rounded text-muted p-3 shadow">
                <?php
                $n = "operador";
                $n .=  " - php web<br/>";

                echo "<code>".$n."</code>";

                $tot = 0;
                $tot += 100;
                $tot +=25;
                $tot *= .9;
                echo $tot . "<br/>";

                echo "<h3>SpaceChip</h3>";

                $a = 10;
                $b = 5;

                //var_dump($b > $a);

                var_dump($b <=> $a);

                echo "<h3>Null Coalescing</h3>";

                $a=null;
                $b=8;
                $c=10;

                echo $a ?? $b ?? $c;
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