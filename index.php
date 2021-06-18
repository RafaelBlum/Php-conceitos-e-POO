<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="resource/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="resource/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/css/style.css" type="text/css">
    <title>POO Php </title>
</head>

<body>
    <div class="container mt-5">
            <div class="row pb-4">
                <!--======================= SESSÕES PHP =======================-->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-3">
                    <?php include "parts/header.php"; ?>

                    <div class="card mt-3">
                        <div class="card-body">
                            <p>
                                Desenvolvimento Php com conceitos da programação orientada a objeto e seus 3 Pilares importantes!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-3">
                        <a href="projectFinal/home.php">
                            <div class="alert alert-danger text-center">
                                <img src="resource/img/planeta.png" class="mr-1" alt="Projeto img" width="30"/>
                                Mini projeto final com conceitos de POO e frontend bootstrap 4
                            </div>
                        </a>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="card card-cascade wider text-left" style="height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="examples/encapsulamento/encapsulamento.php">Encapsulamento</a></h5>
                            <p class="card-text">Encapsulamento gera <code>proteção de acesso</code> aos objetos, com <code>atributos
                                (-) privados ou (#) protegidos</code>, que nunca serão acessados de fora da classe,
                                e uma <code>interface</code> bem bem definida.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="card card-cascade wider text-left" style="height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="examples/relacionamento/relacionamentos.php">Relacionamento</a></h5>
                            <div class="card-text">No relacionamento entre as classes trabalhamos com as <code>multiplicidades</code>,
                            os atributos que serão ligados entre as classes.</div>
                            <code>class homem implements Pessoa</code>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="card card-cascade wider text-left" style="height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="examples/heranca/principal.php">Herança</a></h5>
                            <p class="card-text">A herança permite que criamos novas classes que irão
                                herdar <code>caracteristicas e comportamento</code> da classe mãe.</p>
                                <code>class user extend pessoa</code>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="card card-cascade wider text-left" style="height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="examples/polimorfismo/principal.php">Polimorfismo</a></h5>
                            <p class="card-text">O polimorfismo permite que um metodo tenha varios comportamentos diferentes.</p>
                            <p class="card-text">A assinatura dos <code>métodos devem ser iguais e seus parametros</code>, mas seu <code>comportamento e retorno podem ser diferentes</code>.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                    <h4 class="text-center">Tipos de polimorfismo</h4>

                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card card-cascade wider text-left" style="height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="examples/heranca/principal.php">Sobreposição</a></h5>
                            <p class="card-text">É um dos polimorfismos mais utilizados e acontece quando substituimos um metodo da classe mãe usando a mesma assinatura de metodo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card card-cascade wider text-left" style="height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="examples/heranca/principal.php">Sobrecarga</a></h5>
                            <p class="card-text">O polimorfismo de sobrecarga é menos utilizado e é uma forma de reescrever uma assinatura de metodo nas mesma classe, mas seus parametros são diferentes.</p>
                            <br/><div class="alert-danger alert">Em Php a sobreCarga não existe, o que existe são possiveis gambiaras ou soluções mais complexas.</div>
                            <br/><div class="alert-success alert">Uma solução é mudar o nome do metodo para tentar realizar a sobreCarga.</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <script type="text/javascript" src="resource/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="resource/bootstrap4/js/popper.min.js"></script>
    <script type="text/javascript" src="resource/bootstrap4/js/bootstrap.min.js"></script>

</body>
</html>