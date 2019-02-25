﻿<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schelas Vans Co.</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="../css/layouts/marketing 2.css">
        
    </head>
<?php
//BUSCANDO AS CLASSES
require_once 'Classes/Usuario.class.php';
//ESTANCIANDO 
$objSESS = new Usuario();
//VALIDANDO USUARIO
session_start();
if($_SESSION["logado"] == "sim"){
	$objSESS->usuarioLogado($_SESSION['usuario']);
}else{
	//header("location: Login.php"); 
}
if(isset($_GET['sair']) == "sim"){
	$objSESS->sairUser();
}
?>
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href="">Schelas Vans</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="../index.php" class="pure-menu-link">Sair</a></li>
                    <li class="pure-menu-item"><a href="../index.php" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Conheça</a></li>
                    <li class="pure-menu-item"><a href="php/Login.php" class="pure-menu-link">Entrar</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
