<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">
        <title>Schelas Vans Co.</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="css/layouts/marketing 2.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    </head>

    <body>

        <?php include 'Header2.php' ?>

        <div class="splash-container">
            <div class="splash">
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-5-5">
                        <p class="splash-head">
                            CADASTRO DE USUARIO
                        </p>
                        <form class="pure-form pure-form-stacked">
                            <fieldset>
                                <div class="pure-g">
                                    <div clss="pure-u-md-7-12">
                                        <div class="pure-u-1 pure-u-md-1-3">
                                            <label for="first-name" class="interfacea">Nome</label>
                                            <input id="first-name" class="pure-u-23-24" type="text">
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-24">
                                        </div>	
                                        <div class="pure-u-1 pure-u-md-1-3">
                                            <label for="last-name" class="interfacea">CPF</label>
                                            <input id="last-name" class="pure-u-23-24" type="text">
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-24">
                                        </div>	
                                        <div class="pure-u-1 pure-u-md-1-3">
                                            <label for="email" class="interfacea">E-Mail</label>
                                            <input id="email" class="pure-u-23-24" type="email" required>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-24">
                                        </div>	
                                        <div class="pure-u-1 pure-u-md-1-3">
                                            <label for="city" class="interfacea">Senha</label>
                                            <input id="city" class="pure-u-23-24" type="password">
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-24">
                                        </div>	
                                    </div>

                            </fieldset>
                            <button type="button" class="btn btn-light">Cadastrar</button>
                        </form>				
                    </div>	
                </div>
            </div>
        </div>

        <div class="content-wrapper">

            <div class="footer l-box is-center">
                Schelas Vans e um produto de propriedades Schelas Company. Todos os direitos reservados.
            </div>

        </div>




    </body>
</html>
