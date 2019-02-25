﻿<!doctype html>
<html lang="en">
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schelas Vans Co.</title>
    </header>
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href="../index.php">Schelas Vans</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a id="perfil" href="#" class="pure-menu-link"> <?= $_SESSION['nome'] ?> </a></li>
                    <li class="pure-menu-item"><a id="conheca" href="#" class="pure-menu-link">Conheça</a></li>
                    <li class="pure-menu-item"><a id="login" href="#" class="pure-menu-link"><?php if($_SESSION["logado"] == "sim"){?>Sair<?php }else{?>Entrar<?php }?> </a></li>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="../js/header.js"></script>
    </body>
</html>