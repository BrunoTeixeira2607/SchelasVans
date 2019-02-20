<?php

require_once 'Conexao.class.php';
require_once 'Funcoes.class.php';

class Usuario {

    private $con;
    private $objfunc;
    private $idUser;
    private $nomeUser;
    private $emailUser;
    private $senhaUser;
    private $dataCadastro;

    public function __construct() {
        $this->con = new Conexao();
        $this->objfunc = new Funcoes();
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function querySeleciona($dado) {
        try {
            
        } catch (PDOException $exc) {
            
        }
    }

    public function querySelect() {
        try {
            $cst = $this->con->conectar()->prepare("SELECT 'id',nome,email,senha,idade FROM usuario");
            $cst = execute();
            return $cst - fetchAll();
        } catch (PDOException $exc) {
            return 'error'.$ex->getMessage();
        }
    }

    public function queryInsert($dados) {
        try {
            
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function queryUpdate($dados) {
        try {
            
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function queryDelete($dado) {
        try {
            
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

?>