<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="../resource/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="../resource/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resource/dist_finalProject/css/style.css">
    <title>Project final Php</title>
    <?php
        function __autoload($nomeClasse){
            require_once("$nomeClasse.php");
        }
        $user = new User('Rafael', 41, 'M', 100, 'rafablum');
        $user2 = new User('Jorge', 23, 'M', 63, 'jRxTox_2021');


        $filme = new Video('Tudo sobre POO - Php');
        $filme->setReproduzindo(false);

        $view = new Visualizacao($filme, $user);


    ?>
</head>

<body>

    <!--================= HEADER =================-->
    <div class="container-fluid bg-light text-center" style="padding-bottom: 150px; padding-top: 150px;">
        <img align="center" src="../resource/img/youtubelogo.png" width="80" alt="logo"/>
        <h2 class="text-center titulo">Project YouTube POO</h2>
    </div>



    <div class="container-fluid bg-warning" id="filme">
        <div class="container">

            <div class="row p-3" style="width: 100%;">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row p-1 d-flex justify-content-center">

                        <?php

                        session_start();
                        if($_POST['dexBTN'] == 'play'){
                            $filme->setReproduzindo(true);
                            $filme->setView(1);
                            $user->setTotAssistido(1);
                        }
                        else {
                            $filme->setReproduzindo(false);
                            $filme->getView();
                            $filme->getAvaliacao();
                            $user->getTotAssistido();
                        }





                        $user->user();


                        ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <?php
                        $filme->like();
                        $filme->like();
                        $view->avalia();
                        $view->avaliaNota(9);
                        $view->avaliaPorcent(90);

                        $filme->movie();
                    ?>
                    <div class="d-flex justify-content-start align-items-center">
                        <form method="post" action="#filme" class="mr-3">
                            <input type='hidden' name='dexBTN' value='play'>
                            <input class="btn btn-success btn-sm" type="submit" value="Play">
                        </form>

                        <form method="post" action="#filme">
                            <input type='hidden' name='dexBTN' value='Pause'>
                            <input class="btn btn-primary btn-sm" type="submit" value="Pause">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--================= FOOTER =================-->
    <footer class="container-fluid">
        <div class="container">
            <div class="row pt-5 d-flex justify-content-center" style="width: 100vm;">

                <!--=================  =================-->
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="d-flex justify-content-center borda-circula">
                            <i class="far fa-play-circle icon fa-1x"></i>
                        </div>
                        <div id="sobre" class="text-center">Sobre</div>
                    </div>

                    <div class="d-flex align-items-start justify-content-start mt-3">
                        <div class="mr-2">
                            <i class="fas fa-user-astronaut"></i>
                        </div>
                        <div>Este repositório tem como objetivo demonstrar os conceitos basico da orientação a objeto com Php
                            , com exemplos do 3 pelares principais e por fim um projeto final com todos conceitos.
                        </div>
                    </div>
                </div>

                <!--=================  =================-->
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="d-flex justify-content-center borda-circula">
                                <i class="far fa-list-alt icon fa-1x"></i>
                            </div>
                            <div class="text-center">Exemplos</div>
                        </div>

                        <div class="d-flex align-items-start justify-content-start mt-3">
                            <div class="mr-2">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <div><a href="../examples/encapsulamento/encapsulamento.php">Encapsulamento</a></div>
                        </div>

                        <div class="d-flex align-items-start justify-content-start mt-3">
                            <div class="mr-2">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <div><a href="../examples/relacionamento/relacionamentos.php">Relacionamento</a></div>
                        </div>

                        <div class="d-flex align-items-start justify-content-start mt-3">
                            <div class="mr-2">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <div><a href="../examples/heranca/principal.php">Herança</a></div>
                        </div>

                </div>

                <!--=================  =================-->
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="d-flex justify-content-center borda-circula">
                                <i class="fas fa-sticky-note icon fa-1x"></i>
                            </div>
                            <div class="text-center">Assuntos</div>
                        </div>

                        <div class="d-flex align-items-start justify-content-start mt-3">
                            <div class="mr-2">
                                <i class="fas fa-user-astronaut"></i>
                            </div>
                            <div>Template desenvolvido com Bootstrap 4</div>
                        </div>
                </div>

                <!--=================  =================-->
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="d-flex justify-content-center borda-circula">
                                <i class="fas fa-grip-vertical icon fa-1x"></i>
                            </div>
                            <div class="text-center">Topicos</div>
                        </div>

                        <div class="d-flex align-items-start justify-content-start mt-3">
                            <div class="mr-2">
                                <i class="fas fa-user-astronaut"></i>
                            </div>
                            <div>Template desenvolvido com Bootstrap 4</div>
                        </div>

                </div>
            </div>


            <hr class="my-4">

            <div class="row">
                <!--=================  =================-->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-between text-white">
                    <div><p>Conceito POO Php 2021</p></div>
                    <div>Template desenvolvido com Bootstrap 4 <i class="fa fa-heart text-danger"></i> por <code>Rafael Blum</code></div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="../resource/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap4/js/popper.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../resource/dist_finalProject/js/script.js"></script>

</body>
</html>