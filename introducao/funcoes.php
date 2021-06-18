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
            Mundo 6 - Funções
        </code>
    </h3>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center m-1'><code>Funções</code></h3>
                    <div class="bg-light rounded text-muted p-3 shadow">
                        <?php
                        echo "<code class='font-weight-bold' style='font-size: 28px;'> function nomeFuncao(&dollar;para1, &dollar;para2 = 'valorPadrao', &amp;&dollar;para3){<br>&nbsp;&nbsp;&nbsp;&nbsp;return null;<br>}</code>";
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center m-1'><code>Funções Novidades php 7</code></h3>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
                            <code>Declaração de tipos escalares</code>
                            <div class="bg-light rounded text-muted shadow p-2">
                            <?php
                            echo "<code class='font-weight-bold' style='font-size: 12px;'> function nomeFuncao(tipo ...&dollar;valoresArrays){<br>&nbsp;&nbsp;&nbsp;&nbsp;return array_sum(&dollar;valoresArrays);<br>}</code>";
                            ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
                            <code>Declaração de tipo de retorno</code>
                            <div class="bg-light rounded text-muted shadow p-2">
                            <?php
                            echo "<code class='font-weight-bold' style='font-size: 12px;'> function nomeFuncao(int ...&dollar;valoresArrays):string{<br>&nbsp;&nbsp;&nbsp;&nbsp;return null;<br>}</code>";
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <h3 class='alert alert-primary p-0 text-center m-1'><code>Descrições gerais <i class='fas fa-traffic-light'></i></code></h3>
            <div class="bg-light rounded text-muted p-3 shadow">
                <?php
                echo "<p class='text-muted m-0'>&hearts;Toda função retorna algo.</p>";
                echo "<p class='text-muted m-0'>&hearts;Parametros de uma função e parametros que são padrões.</p>";
                echo "<p class='text-muted m-0'>&hearts;Parametros por valor é quando é passado uma variavel na função, mas as modificações ficam somente dentro da função.</p>";
                echo "<p class='text-muted m-0'>&hearts;Parametros por referencia, é quando modificamos o valor de qualquer variavel atravez do seu endereço na memoria. ex: <code>&amp;&dollar;variavel</code></p>";
                echo "<p class='text-danger m-0'>&hearts;Novidades PHP 7.</p>";
                echo "<p class='text-muted m-0'>&hearts;<code>Declaração de tipos escalares</code>, deixa acessar todos parametros de uma vez só.</p>";
                echo "<p class='text-muted m-0'>&hearts;<code>Declaração de tipo de retorno</code>, deixamos definido o tipo de retorno, então caso sejam INT os tipos, podemos definir o retornar como STRING.</p>";
                echo "<p class='text-muted m-0'>&hearts;Função recursiva são uteis para acessar dados de forma hierarquica.</p>";
                echo "<p class='text-muted m-0'>&hearts;Funções anonimas é quando uma variavel recebe uma função e sem return.</p>";
                ?>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <h3 class='alert alert-primary p-0 text-center m-1'><code>Exercício</code></h3>
            <div class="bg-light rounded text-muted p-3 shadow" style="height: 400px;">
                <?php
                echo "<p class='text-info'>
                                    <i class='fas fa-user-astronaut'></i> Usuário tem uma salario e deve receber um aumento de 10% caso tenha menos de 1 ano e 20% mais de 1 ano, utilizando uma função.<br>
                                    <i class='fas fa-user-astronaut'></i> Somar os valores de todos seus carros com valores de (1200, 3000, 500).
                      </p>";

                $user = array(
                    'nome' => "Rafael",
                    'salario' => 1380,
                    'tempo' => 2,
                    'aumento'=> 0,
                    'carros'=> array(
                        'ferrary'=> 1200,
                        'Porshe'=> 3000,
                        'Fuca'=> 500,
                        'valorTotal' => 0
                    ),
                    'profissao' => array(
                        'cargo' => 'Gerente'
                    ),
                    'mensageAnonima'=> function($name){
                        echo "Olá Mundo!! É minha " . $name . "<br/>";
                    }
                );
                $aux = $user['salario'];


                function bonificacaoSalarial(&$salario, $tempoempresa, &$aumento, $salarioAntigo = 0){
                    $salarioAntigo = $salario;

                    if($tempoempresa < 2){
                        $salario += $salario * 10 / 100;
                    }else{
                        $salario += $salario * 20 / 100;
                    }

                    $aumento = $salario - $salarioAntigo;

                    return $salario;
                }

                function valorDoCarros(int &...$carros): string{
                    return array_sum($carros);
                }

                function addCargo(&$cargo){
                    array_push($cargo, array(
                       'cargo'=> 'Auxiliardecompras'
                    ));
                }
                function exibeProfissoes($cargos){
                    $html = "<ul>";

                        foreach($cargos as $cargo){
                            $html .= "<li>";

                            $html .= $cargo['cargo'];

                            $html .= "</li>";
                        }

                    $html .= "</ul>";
                    return $html;
                }

                $msg = function(){
                    echo "Terminado o processo de funções em PHP.";
                };

                $user['carros']['valorTotal'] = valorDoCarros($user['carros']['ferrary'],$user['carros']['Porshe'], $user['carros']['Fuca']);

                echo "<i class='fas fa-coins'></i> Salario R$ " . $user['salario'];
                echo "<br/>Salario R$ " . bonificacaoSalarial($user['salario'], $user['tempo'], $user['aumento']) . " <i class='fas fa-coins'></i>";
                echo "<br>Aumento de " . ($user['tempo'] > 1 ? "20" : "10"). "&percnt; " . $user['aumento'];
                echo "<br>Meus carros custam " . "R$ " . $user['carros']['valorTotal']."<br>";

                $user['mensageAnonima']('Função Anonima!');

                $msg();

                //addCargo($user['profissao']);

                //exibeProfissoes($user['profissao']);

                echo "<br><hr/><code>Dados do usuário ". $user['nome']. " Cargo[ " . $user['profissao']['cargo'] ." ]</code><br>";
                var_dump($user);
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