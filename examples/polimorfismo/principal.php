<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "../../parts/topo.php";

        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';
        require_once 'Lobo.php';
    ?>
    <title>Php Herança</title>
</head>
<body class="bg-info">
    <?php
        $m = new Mamifero("vermelho", 50, 10, 4);
        $c = new Canguru("marron", 50, 10, 4);
        $ca = new Cachorro("branco", 50, 10, 4);
        $lo = new Lobo("Listrado", 50, 10, 4);

        $r = new Reptil("Rosa", 10, 2, 4);
        $co = new Cobra("Cinza", 10, 2, 4);
        $t = new Tartaruga("Marron", 10, 2, 4);

        $p = new Peixe("Azul", 11, 5, 4);
        $g = new Goldfish("amarelo", 11, 5, 4);

        $a = new Ave("Preto", 5, 1, 8);
        $ar = new Arara("azul", 5, 1, 8);
    ?>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
                <div class="card">
                    <div class="card-header card-header-primary text-center bg-light">
                        <h4 class="card-title text-black-50">ANIMAL</h4>
                        <p class="card-category text-black-50">SuperClasse - abstract</p>
                    </div>
                </div>
            </div>
<!--======================================  FILHOS  ================================-->
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-warning">
                        <h4 class="card-title text-black-50"> <?php $m->tipoAnimal();?></h4>
                        <p class="card-category text-black-50">SubClasse</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $m->showAnimal();
                            $m->emitirSom();
                            $m->locomover();
                            $m->alimentar();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-warning">
                        <h4 class="card-title text-black-50"><?php $r->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">SubClasse</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $r->showAnimal();
                            $r->emitirSom();
                            $r->locomover();
                            $r->alimentar();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-warning">
                        <h4 class="card-title text-black-50"><?php  $p->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">SubClasse</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $p->showAnimal();
                            $p->emitirSom();
                            $p->locomover();
                            $p->alimentar();
                            $p->soltaBolha();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-warning">
                        <h4 class="card-title text-black-50"><?php  $a->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">SubClasse</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $a->showAnimal();
                            $a->emitirSom();
                            $a->locomover();
                            $a->alimentar();
                        ?>
                    </div>
                </div>
            </div>

<!--======================================  DESCENDENTES  ================================-->

            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-info">
                        <h4 class="card-title text-black-50"><?php  $c->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">DESCENDENTES</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $c->showAnimal();
                            $c->locomover();
                            $c->usarBolsa();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-info">
                        <h4 class="card-title text-black-50"><?php  $ca->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">DESCENDENTES</p>
                    </div>
                    <div class="card-body">
                        <?php
                        $ca->showAnimal();
                        $ca->abanaRabo();
                        $ca->enterraOsso();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-info">
                        <h4 class="card-title text-black-50"><?php  $co->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">DESCENDENTES</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $co->showAnimal();
                            $co->emitirSom();
                            $co->locomover();
                            $co->alimentar();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-info">
                        <h4 class="card-title text-black-50"><?php  $t->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">DESCENDENTES</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $t->showAnimal();
                            $t->emitirSom();
                            $t->locomover();
                            $t->alimentar();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-info">
                        <h4 class="card-title text-black-50"><?php  $g->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">DESCENDENTES</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $g->showAnimal();
                            $g->emitirSom();
                            $g->locomover();
                            $g->alimentar();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-info">
                        <h4 class="card-title text-black-50"><?php  $ar->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">DESCENDENTES</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $ar->showAnimal();
                            $ar->emitirSom();
                            $ar->locomover();
                            $ar->alimentar();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-5">
                <div class="card" style="height: 100%;">
                    <div class="card-header card-header-primary text-center bg-warning">
                        <h4 class="card-title text-black-50"><?php  $lo->tipoAnimal();  ?></h4>
                        <p class="card-category text-black-50">Trabalhando com sobrecarga - chamando o mesmo método varias vezes na mesma classe.</p>
                    </div>
                    <div class="card-body">
                        <?php
                            $lo->showAnimal();
                            $lo->emitirSom();
                            $lo->locomover();
                            $lo->alimentar();

                            $lo->reagirFrase('ola');
                            $lo->reagirDono(true);
                            $lo->reagirHoraDia(16);
                            $lo->reagirIdadePeso(41, 85);
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="../resource/bootstrap4/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap4/js/popper.min.js"></script>
    <script type="text/javascript" src="../resource/bootstrap4/js/bootstrap.min.js"></script>
</html>
</body>
