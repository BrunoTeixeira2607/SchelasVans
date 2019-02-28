<!DOCTYPE html>

<html>
    <header>
        <title>Schelas Vans Co.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="../css/layouts/marketing.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </header>
    <body>
        <?php
        require 'Header2.php';
        ?>

        <div class= "container">
            <br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card card-panel">
                        <span class="card-title is-center">LOGIN</span>
                        <hr>
                        <form method="POST" id="formLogin">
                            <div class="form-group">
                                <label for="email">Endereço de e-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="exemplo@email.com">

                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" name="senha" class="form-control" id="password" placeholder="••••••••">
                            </div>
                            <div class="form-group is-center">
                                <button type="submit" name="btLogar" class="btn btn-primary">Entrar</button>
                                <a href="#forgot" data-toggle="collapse">Esqueci minha senha</a><br><br>
                                <a href="#" id="register" data-toggle="collapse">Não tem conta? Registre-se agora!</a>
                            </div>
                        </form>

                        <div class="collapse" id="forgot">
                            <div class="card card-body grey lighten-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">Esqueceu a senha ?</span>
                                        <p class="emailnome">Caso tenha esquecido sua senha, digite seu e-mail para que seja enviada solicitação de recuperação</p>
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                                            </div>
                                        </form>
                                        <button type="button" class="btn btn-primary">Enviar</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="../js/login.js"></script>

    </body>

    <footer>
        <?php require 'Footer.php'; ?>
    </footer>
</html>
