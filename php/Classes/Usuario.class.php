<?php

include_once "Conexao.class.php";
include_once "Funcoes.class.php";

class Usuario {

    private $con;
    private $objfc;
    private $idUser;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;
    private $dataNas;
    private $RG;
    private $CPF;
    private $tipoUser;

    public function __construct() {
        $this->con = new Conexao();
        $this->objfc = new Funcoes();
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function querySeleciona($dado) {
        try {
            $this->idUser = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("SELECT idUser, nome, email, data_cadastro FROM `usuario` WHERE `idUser` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idUser, PDO::PARAM_INT);
            $cst->execute();
            return $cst->fetch();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function querySelect() {
        try {
            $cst = $this->con->conectar()->prepare("SELECT `idUser`, `nome`, `email`, `data_cadastro` FROM `usuario`;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert($dados) {
        try {
            $this->nome = $this->objfc->tratarCaracter($dados['nome'], 1);
            $this->email = $dados['email'];
            $this->senha = sha1($dados['senha']);
            $this->dataNas = $dados['dataNas'];
            $this->CPF = $dados['CPF'];
            $this->RG = $dados['RG'];

            $this->dataCadastro = $this->objfc->dataAtual(2);
            $cst = $this->con->conectar()->prepare("insert into usuario (nome,email,dataNas,RG,CPF,data_Cadastro,senha,tipoUser) values (:nome, :email, :dataNas, :RG, :CPF, :data_Cadastro, :senha, 1);");
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":dataNas", $this->dataNas, PDO::PARAM_STR);
            $cst->bindParam(":RG", $this->RG, PDO::PARAM_STR);
            $cst->bindParam(":CPF", $this->CPF, PDO::PARAM_STR);
            $cst->bindParam("data_Cadastro", $this->dataCadastro, PDO::PARAM_STR);
            $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);

            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }
    }

    public function queryUpdate($dados) {
        try {
            $this->idUser = $this->objfc->base64($dados['func'], 2);
            $this->nome = $this->objfc->tratarCaracter($dados['nome'], 1);
            $this->email = $dados['email'];
            $cst = $this->con->conectar()->prepare("UPDATE `usuario` SET  `nome` = :nome, `email` = :email WHERE `idUser` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idUser, PDO::PARAM_INT);
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryDelete($dado) {
        try {
            $this->idUser = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("DELETE FROM `usuario` WHERE `idUser` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idUser, PDO::PARAM_INT);
            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' . $ex->getMessage();
        }
    }

    public function logar($email, $password) {
        $this->email = $email;
        $this->senha = sha1($password);
        try {
            $cst = $this->con->conectar()->prepare("SELECT IdUser, email, nome, senha FROM `usuario` WHERE email = :email AND senha = :senha");
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $cst->execute();
            if ($cst->rowCount() == 0) { 
                return false;
            } else {
                if ($cst->rowCount() == 1) {
                    $rst = $cst->fetch();
                    session_start();
                    $_SESSION['logado'] = "sim";
                    $_SESSION['nome'] = $rst['name'];
                    $_SESSION['userid'] = $rst['IdUser'];
                    $this->usuarioTipo($rst['IdUser']);
                    return true;
                }
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function usuarioLogado($userId) {
        $cst = $this->con->conectar()->prepare("SELECT `IdUser`, `nome`, `email` FROM `usuario` WHERE `IdUser` = :IdUser;");
        $cst->bindParam(':IdUser', $userId, PDO::PARAM_INT);
        $cst->execute();
        $rst = $cst->fetch();
    }

    public function usuarioTipo($userId) {
        
        $cst = $this->con->conectar()->prepare("SELECT tipoUser FROM `usuario` WHERE `IdUser` = :IdUser;");
        $cst->bindParam(':IdUser', $userId, PDO::PARAM_INT);
        $cst->execute();
        $rst = $cst->fetch();
        
        $tipoUser = $rst['tipoUser'];

        if ($tipoUser == 1) {
            $_SESSION['usuario'] = 1;
            header("location: ../index.php");
        } else if ($tipoUser == 2) {
            $_SESSION['usuario'] = 2;
            header("location: ../index.php");
        } else if ($tipoUser == 3) {
            $_SESSION['usuario'] = 3;
            header("location: ../index.php");
        } else{
            $this->sairUser();
        }
    }

    public function sairUser() {
        session_destroy();
        return true;
    }

}

?>