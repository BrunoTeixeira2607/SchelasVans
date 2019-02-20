<?php

class Funcoes {

    public function tratarCaractere($valor, $tipo) {
        switch ($tipo) {
            case 1: $rst = utf8_decode($valor);
                break;
            case 2: $rst = htmlentities($valor, ENT_QUOTES, "ISO-8859-1");
                break;
            default:
                break;
        }
        return $rst;
    }

    public function dataAtual($tipo) {
        switch ($tipo) {
            case 1: $rst = date("Y-m-d");
                break;
            case 2: $rst = date("Y-m-d H:i:s");
                break;
            case 3: $rst = date("d/m/Y");
                break;
            default:
                break;
        }
        return $rst;
    }

    public function base64($valor, $tipo) {
        switch ($tipo) {
            case 1: $rst = base64_encode($valor);
                break;
            case 2: $rst = base64_decode($valor);
                break;

            default:
                break;
        }
        return $rst;
    }

}

?>