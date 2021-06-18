<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "../../parts/topo.php";
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';
        require_once 'Visitante.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
    ?>
    <title>Php Herança</title>
</head>
<body class="bg-info">
    <?php
        $a = new Aluno("Rafael Blum", 41, "M", 1000202, "Tecnologia");
        $f = new Funcionario("Paulo Sergio", 32, "M", "Administrativo", true);
        $p = new Professor("Luisa Santos", 23, "F", "Geografia", 2398);
        $v = new Visitante("Carlos Gambi", 53, "M");
        $b = new Bolsista("Lucas Frota", 19, "m", true);
        $t = new Tecnico("Lineu Soares", 35, "m", 3002);

    ?>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card-header-primary text-center bg-dark">
                        <h4 class="card-title text-white text-black-50">Lista de usuários</h4>
                        <p class="card-category text-white text-black-50">Herança e polimorfismo</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>Avatar</th>
                                    <th>Nome</th>
                                    <th>Representação</th>
                                    <th>Idade</th>
                                    <th>Sexo</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $a->fazerAniversario();
                                        $a->apresentar();
                                        $f->apresentar();
                                        $p->apresentar();
                                        $v->apresentar();
                                        $b->apresentar();
                                        $t->apresentar();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card-header-primary text-center bg-secondary">
                        <h4 class="card-title text-white text-black-50">Ações</h4>
                        <p class="card-category text-white text-black-50">Herança e polimorfismo</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th class="text-center">Ações</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $a->cancelaMatricula();
                                        $f->mudarTrabalho();
                                        $p->receberAumento(150);
                                        $b->renovaBolsa();
                                        $t->pratica();
                                        $a->pagarMensalidade();
                                        $b->pagarMensalidade();
                                        $t->pagarMensalidade();
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
