<?php

/**
 * Description of Caneta
 *
 * @author Karen
 */
class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!</p>";
        }
        echo "<p>Estou rabiscando...</p>";
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }

}
