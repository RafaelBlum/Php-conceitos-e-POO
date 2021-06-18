<!DOCTYPE html>
<html lang="pt-br">
<?php
    include "../../parts/topo.php";
    require_once '../../poo/encapsulamento/Pessoa.php';
    require_once '../../poo/relacionamento/Lutador.php';
    require_once '../../poo/relacionamento/Luta.php';
?>

<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <p>
                    <a href="/curso-Php"><img src="../../resource/img/medalha.png" class="med"></a>
                    Encapsulamento gera proteção de acesso aos objetos, com atributos privados, que nunca serão acessados de fora da classe.<br>
                    No encapsulamento devemos entender a visibilidade dos atributos e metodos especiais Getters e Setters.<br>
                    O encapsulamento é como se fosse uma capsula protetora de um controle eos usuários tem acesso somente a sua interface ou metodos especiais.<br>
                    A <strong>interface</strong> não tem atributos, seus metodos são abstratos ou seja não tem código, desenvolvimento. O implementação será realizada na classe que receber a implementação da interface.
                    <br>
                    
                    <p><strong>Vantagens:: </strong> Torna as mudanças invisíveis, facilita a reutilização de código, Reduz efeitos colaterais</p>
                    <p>Atributos devem ser <strong>privados ou protegidos</strong> </p>
                    <p>O usuário terá acesso somente aos metodos que serão <strong>publicos</strong> </p>

                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="badge badge-danger mt-3 mb-1" style="width: 100%;">Exercício</div>
                <!--======================= SESSÕES PHP =======================-->
                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                    <div class="row">
                        <!--ENCAPSULAMENTO -->
                        <div class='col-sm-6 col-md-6 col-lg-6 col-xl-6'>
                            <div class="row">
                                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                                    <div class="text-black-50">Historico de movimentações</div>
                                    <hr>
                                </div>
                                <?php
                                $p1 = new Pessoa("Rafael Blum", "m");
                                $p3 = new Pessoa("Ericson Blum", "m");
                                $p4 = new Pessoa("Mara Blum", "f");
                                $p2 = new Pessoa("Olivia Medeiros", "f");

                                echo $p1->abrirConta("CP");
                                echo $p1->depositar(1200);
                                echo $p1->sacar(455);
                                echo $p1->sacar(90);
                                echo $p1->depositar(2390);


                                echo $p2->abrirConta("CC");
                                echo $p2->depositar(1200);
                                echo $p2->sacar(90);
                                echo $p2->fecharConta();
                                echo $p2->sacar(248);
                                echo $p2->fecharConta();
                                ?>
                            </div>
                        </div>
                        <div class='col-sm-6 col-md-6 col-lg-6 col-xl-6'>
                            <div class="row">
                                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                                    <div class="text-black-50">Banco php coin</div>
                                    <hr>

                                    <?php
                                        $p1->user();
                                        $p2->user();
                                        $p3->user();
                                        $p4->user();
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