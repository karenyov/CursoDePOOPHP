<?php

/**
 * Description of Caneta
 *
 * @author Karen
 */
class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!</p>";
        }
        echo "<p>Estou rabiscando...</p>";
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }

}
