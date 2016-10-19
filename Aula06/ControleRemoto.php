<?php

require_once 'Controlador.php';

/**
 * Description of ControleRemoto
 *
 * @author Karen
 */
class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<p>----- MENU -----</p>";
        echo "<br/>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br/>Está TOCANDO?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br/>Volume: " . $this->getVolume();

        for ($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br/>";
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "<br/>Fechando Menu...";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>ERRO: Não posso aumentar o volume </p>";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }  else {
            echo "<p>ERRO: Não posso diminuir o volume</p>";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

}
