<!DOCTYPE html>

<html>
    <head>
        <title>Schelas Vans Co.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schelas Vans Co.</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="../css/layouts/marketing.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>
    <body>
        <?php
        include 'Header2.php';
        require_once 'Classes/Usuario.class.php';

        $objUser = new Usuario();

        if (isset($_POST['btLogar'])) {
            $objUser->logar($_POST);
        }
        ?>

        <div class= "container">
            <br><br><br>
            <h1> LOGIN </h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="post">
                        <div class="form-group">
                            <label for="email">Endereço de e-mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="senha" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" name="btLogar" class="btn btn-primary">Entrar</button>
                        <a href="#forgot" data-toggle="collapse">Esqueci minha senha</a>
                    </form>

                    <div class="collapse" id="forgot">
                        <div class="card card-body grey lighten-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Esqueceu a senha ?</span>
                                    <p class="emailnome">Caso tenha esquecido sua senha, digite seu e-mail para que seja enviada solicitação de recuperação</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                                            </form>
                                        </div>
                                        <button type="button" class="btn btn-primary">Enviar</button>
                                </div>
                        </div>
                    </div>

                    <?php if (!empty($_GET['Login']) == 'error   ') { ?>                  
                        <div class="row">
                            <div class="col s12 m5">
                                <div class="card-panel red lighten-2">
                                    <span class="white-text"> Ops! Email ou senha inválidos.
                                    </span>
                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                </div>
                <div class="col-md-1">
                </div>    
                <div class="col-md-4">
                    
                </div>    
                </body>

                <footer>
                    <?php include 'Footer.php'; ?>
                </footer>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                </html>