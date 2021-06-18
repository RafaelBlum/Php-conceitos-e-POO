<!DOCTYPE html>
<html lang="pt-br">
<?php
    include "../../parts/topo.php";
    require_once '../../poo/encapsulamento/Pessoa.php';
    require_once '../../poo/relacionamento/Lutador.php';
    require_once '../../poo/relacionamento/Luta.php';
    require_once '../../poo/relacionamento/People.php';
    require_once '../../poo/relacionamento/Livro.php';
?>

<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <p>
                    <a href="/curso-Php"><img src="../../resource/img/medalha.png" class="med"></a>
                    <strong>Relacionamento entre classes </strong><br>
                    <p>No relacionamento entre as classes trabalhamos com as multiplicidades, os atributos que serão ligados entre as classes.</p>
                    <p>Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria.</p>
                    
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="badge badge-danger mt-3 mb-1" style="width: 100%;">Exercício 1 - Lutadores disputam uma luta</div>
                <!--======================= EXERCICIO 1 =======================-->
                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                    <div class="row pt-2">
                        <div class='col-sm-6 col-md-6 col-lg-6 col-xl-6'>
                            <div class="text-black-50">LUTADORES    </div>
                            <hr>
                                <?php
                                    $lutadores = array();
                                    $lutadores[0] = new Lutador('Rafael', 'Brasil', 42, 1.80, 66, 0, 0, 0);
                                    $lutadores[1] = new Lutador('Ricardo', 'Brasil', 42, 1.80, 76, 0, 0, 0);
                                    $lutadores[2] = new Lutador('Luiza', 'Brasil', 42, 1.80, 120, 0, 0, 0);

                                    foreach($lutadores as $figther){
                                        echo $figther->apresentar();
                                    }
                                ?>

                        </div>
                        <div class='col-sm-6 col-md-6 col-lg-6 col-xl-6'>

                            <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                                <div class="text-black-50">LUTA</div>
                                <hr>

                                <?php
                                    $ring = new Luta();
                                    $i = rand(0, 2);
                                    $x = rand(0, 2);
                                    echo $ring->lutar($lutadores[$i], $lutadores[$x]);
                                ?>
                            </div>

                            </div>
                            
                        </div>  
                    </div>
                </div>

                <div class="badge badge-danger mt-3 mb-1" style="width: 100%;">Exercício 2 - Uma pessoa tem 0 ou + livros (agregação) e um livro se sua publicação (interface)</div>
                <!--======================= EXERCICIO 2 =======================-->
                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                    <div class="row pt-2">
                        <div class='col-sm-6 col-md-6 col-lg-6 col-xl-6'>
                            <div class="text-black-50">LEITOR</div>
                            <hr>
                                <?php
                                    $p = new People('Rafael', 41, "M");
                                    echo $p->quemSou();

                                    $p2 = new People('Luiza', 34, "F");

                                    echo $p2->quemSou();
                                ?>

                        </div>
                        <div class='col-sm-6 col-md-6 col-lg-6 col-xl-6'>

                            <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                                <div class="text-black-50">LIVRO</div>
                                <hr>

                                <?php
                                    $livro = new Livro('Pinoquio', $p2, $p, 50);
                                    $livro->abrir();
                                    echo $livro->avancarPagina();
                                    echo $livro->avancarPagina();
                                    echo $livro->voltarPagina();
                                    echo $p->fazerAniversario();
                                    echo $livro->detalhes();    
                                ?>
                            </div>

                            </div>
                            
                        </div>  
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript" src="../resource/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap4/js/popper.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap4/js/bootstrap.min.js"></script>

</body>



</html>