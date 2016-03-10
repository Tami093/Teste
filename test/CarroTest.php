<?php

require_once "Carro.php";

/**
 * Classe Carro Teste
 **/
class CarroTeste extends PHPUnit_Framework_Testcase
{
    public function testeCor()
    {
        $carro = new Carro();
        $carro->setCor("Azul");

        $this->assertEquals("Azul", $carro->getCor());
    }
}

?>