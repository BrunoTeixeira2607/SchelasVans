<!DOCTYPE html>
<html>
    <head>
        <title>Schelas Vans Co.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="css/layouts/marketing.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>
    <body>
        <?php include 'Header2.php' ?>
        <?php
        require_once ('Classes/Funcoes.class.php');
        require_once ('Classes/Usuario.class.php');

        $objFc = new Funcoes();
        $objUsr = new Usuario();

        if (isset($_POST['btCadastrar'])) {
            if ($objUsr->queryInsert($_POST) == 'ok') {
                echo '<script type="text/javascript">alert("Cadastro efetuado com Sucesso !")</script>';
                header('location: ../index.php');
            }
//            } else {
//                echo '<script type="text/javascript">alert("Erro ao cadastrar")</script>';
//            }
        }
        ?>
        
        <br><br><br>
        <div class= "container is-center">
            <div class="row">
                <div class="col-md-5 offset-md-4">
                    <H1>Cadastro de usuários</H1>
                    <p>Complete os campos a seguir para criar sua conta.</p>
                    <form class="pure-form pure-form-aligned" method="post">
                        <fieldset>
                            <div class="col-md-12">
                                <label for="name">Nome</label>
                                <input id="name" name="nome" type="text" placeholder="Digite seu Nome">
                            </div>

                            <div class="col-md-12">
                                <label for="password">Senha</label>
                                <input id="password" name="senha" type="password" placeholder="Digite a senha">
                            </div>

                            <div class="col-md-12">
                                <label for="email">Endereço de e-mail</label>
                                <input id="email" name="email" type="email" placeholder="Digite e-mail">
                            </div>
                            <div class="col-md-12">
                                <label for="password">Data de Nascimento</label>
                                <input id="password" name="dataNas" type="date">
                            </div>
                            <div class="col-md-12">
                                <label for="name">RG</label>
                                <input id="name" name="RG" type="text" placeholder="Digite seu RG">
                            </div>
                            <div class="col-md-12">
                                <label for="name">CPF</label>
                                <input id="name" name="CPF" type="text" placeholder="Digite seu CPF">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="btCadastrar" class="pure-button pure-button-primary">Cadastrar</button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
        <br><br><br>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <footer>
        <?php include 'Footer.php'; ?>
    </footer>
</html>
