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
            Mundo 7 - Dates
        </code><i class="fas fa-user-astronaut fa-2x float-right text-danger"></i>
    </h3>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <!-- CONTEÚDOS -->
            <div class="row">

                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center m-1'><code>Date</code></h3>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-xl-4 col-lg-4">
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                date_default_timezone_set('America/Sao_Paulo');
                                echo "<code class='font-weight-bold' style='font-size: 28px;'>
                                    date('d/m/Y H:i:s');
                                </code>";
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-xl-8 col-lg-8">
                            <code>Descritivo auxiliar</code>
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                echo "<p class='text-muted m-0'>&hearts;Função date('d/m/Y') precisa pelo meno um parametro com 'd' ou 'm' ou 'Y' dia, mês, ano ou outras letras.</p>";
                                echo "<p class='text-muted m-0'>&hearts;Horas na data é H:i:s de hora, minutos e segundos</p>";
                                echo "<p class='text-muted m-0'>&hearts;Podemos ajustar a hora local com: <code>date_default_timezone_set('America/Sao_Paulo')</code></p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center m-1'><code>TimeStamp</code></h3>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-xl-4 col-lg-4">
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                $st = strtotime("1979-11-30");

                                echo "<code class='font-weight-bold' style='font-size: 28px;'>
                                        time();
                                    </code>";

                                echo "<code class='font-weight-bold' style='font-size: 12px;'>
                                    <br> Como pegar o Timestamp de uma data especifica:<br> &dollar;st = strtotime('1979-11-30') = "
                                    . $st .
                                    "</code>";
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-xl-8 col-lg-8">
                            <code>Descritivo auxiliar</code>
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                echo "<p class='text-muted m-0'>&hearts;TimeStamp é um valor padrão na função date que se inicia em segundos desde 01/01/1970 e como pegar este timestamp?</p>";
                                echo "<p class='text-muted m-0'>&hearts;Pegamos o timestamp usando a função <code>time();</code></p>";
                                echo "<p class='text-muted m-0'>&hearts;Com o timestamp, podemos definir uma data em segundo <code>date('d/m/Y H:i:s', timestamp...);</code></p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center m-1'><code>SetLocale</code></h3>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-xl-4 col-lg-4">
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

                                echo "<code class='font-weight-bold' style='font-size: 24px;'>
                                        setlocale(LC_ALL, locale)
                                    </code>";

                                echo "<code class='font-weight-bold' style='font-size: 12px;'>
                                    <br> Data: "
                                    . strftime("%D") .
                                    "</code>";

                                echo "<code class='font-weight-bold' style='font-size: 12px;'>
                                    <br> Hora: "
                                    . strftime("%R") .
                                    "</code>";

                                echo "<code class='font-weight-bold' style='font-size: 12px;'>
                                    <br> Hora full: "
                                    . strftime("%T") .
                                    "</code>";

                                echo "<code class='font-weight-bold' style='font-size: 12px;'>
                                    <br> Dia semana: "
                                    . strftime("%A") .
                                    "</code>";

                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-xl-8 col-lg-8">
                            <code>Descritivo auxiliar</code>
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                echo "<p class='text-muted m-0'>&hearts;LC_ALL diz ara definir todo sistema.</p>";
                                echo "<p class='text-muted m-0'>&hearts;O locale é o padrão de linguagem, mas temos 3 tipos dependendo do sistema, pois no Linux é de uma forma, UTF-8, e windowns é outra.</code></p>";
                                echo "<p class='text-muted m-0'>&hearts;respectivamente: 'pt_BR', 'pt_BR.utf-8' e 'portuguese'</code></p>";
                                echo "<p class='text-muted m-0'>&hearts;Precisamos ver a tabela de formação para mostrar usando o <code>strftime()</code></code></p>";
                                echo "<p class='text-muted m-0'>&hearts;Verificar na documentação em PHP:strftime manual ou em <a href='strftime.net'>strftime.net</a> </code></p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
                    <h3 class='alert alert-primary p-0 text-center m-1'><code>Classe DateTime</code></h3>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-xl-4 col-lg-4">
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                echo "<code class='font-weight-bold' style='font-size: 24px;'>
                                        new DateTime()
                                    </code>";

                                echo "<br>Criar objeto: <code class='font-weight-bold' style='font-size: 12px;'>
                                    &dollar;dt = new DateTime();</code>";

                                echo "<br>Mostrar e formatar: <code class='font-weight-bold' style='font-size: 12px;'>
                                    &dollar;dt->format('d/m/Y');</code>";

                                echo "<br>Trabalhar com intervalo: <code class='font-weight-bold' style='font-size: 12px;'>
                                    DateInterval();</code> e <code>add()</code>";

                                echo "<hr/>Ex: <code class='font-weight-bold' style='font-size: 12px;'>
                                    &dollar;periodo = DateInterval('P15D');</code><br> e <code>&dollar;dt->add(&dollar;periodo);</code>";
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-xl-8 col-lg-8">
                            <code>Descritivo auxiliar</code>
                            <div class="bg-light rounded text-muted shadow p-2">
                                <?php
                                echo "<p class='text-muted m-0'>&hearts; Com DateTime vamos estanciar um objeto.</p>";
                                echo "<p class='text-muted m-0'>&hearts;Criado um objeto DateTime, podemos trabalhar com vários metodos para trabalhar com as datas.</p>";
                                echo "<p class='text-muted m-0'>&hearts;No DateInterval temos o metodo construtor que podemos passar alguns dados de configuração.</p>";
                                echo "<p class='text-muted m-0'>&hearts; Veja na documentação DateTime e outros metodos.</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- EXERCÍCIO -->
        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <h3 class='alert alert-primary p-0 text-center m-1'><code>Exercício</code></h3>
            <div class="bg-light rounded text-muted p-3 shadow">
                <?php
                    echo "1. Um cliente comprou um equipamento parcelados em 3 pagamentos onde deve pagar a primeira no dia da compra, segunda daqui 3 dias e a última 3 semanas depois.
                    Precisamos criar uma nota com as datas de pagamento e na nota precisa ter a data da compra e data que emite a nota na tela.";

                ?>
            </div>
        </div>

        <!-- RESPOSTAS -->
        <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12">
            <h3 class='alert alert-primary p-0 text-center m-1'><code>Resposta(s)</code></h3>
            <div class="bg-light rounded text-muted p-3 shadow" style="height: 700px;">
                <?php

                $user = array(
                    'name'=> "Rafael Blum",
                    'emissao_nota'=> date('d/m/Y'),
                    'nota-number'=> $st = strtotime('2021-5-9 14:03:30'),
                    'date-compra'=> date('d/m/Y H:i:s', $st),
                    'parcelas'=> array(
                        'Parcela 1'=> array(
                            'data'=> date("l, d/m/y", strtotime("now")),
                            'valor'=> 140.30
                        ),
                        'Parcela 2'=> array(
                            'data'=> date("l, d/m/y", strtotime("+3 day")),
                            'valor'=> 240.30
                        ),
                        'Parcela 3'=> array(
                            'data'=> date("l, d/m/y", strtotime("+2 week")),
                            'valor'=> 540.30
                        )
                    )
                );

                echo "<div class='card m-5 p-4'>";
                    echo "<h4 class='text-center'>Nota fiscal</h4>";
                    echo "Data emissão do comprovante " . "<code>" . $user['emissao_nota'] . " ( " . ucwords(strftime("%A")). " )". "</code>";
                    echo "<br>Cliente " . "<code>" . $user['name'] . "</code>";
                    echo "<br>Nota fiscal " . "<code>" . $user['nota-number'] . "</code>";
                    echo "<br>Data da compra " . "<code>" . $user['date-compra'] . "</code>";

                    echo "<div class='text-center'>".
                                "<h4 class='text-center'>".count($user['parcelas']). " parcelas</h4>";

                                foreach($user['parcelas'] as $i=> $pt){
                                    echo $i . " - " . $pt['data'] . " <code>R$: " . $pt['valor'] . "</code><br>";
                                }
                    echo "</div>";

                    $dt = new DateTime();
                    echo "<div class='container bg-primary font-weight-bold p-3 text-white mt-3 rounded-1'>". $dt->format('d/m/Y'). " e-fiscal</div>";

                echo "</div>";
                echo "<hr/>";
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