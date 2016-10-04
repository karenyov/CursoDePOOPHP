<?php

/**
 * Description of Caneta
 *
 * @author Karen
 */
class Caneta {

    public $modelo;
    private $ponta;
    private $cor;

    function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

}
