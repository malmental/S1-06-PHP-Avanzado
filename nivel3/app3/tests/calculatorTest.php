<?php

namespace app3\Calculator\tests;

use PHPUnit\Framework\TestCase;
use app3\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    public function testSuma()
    {
        // 1. ARRANGE (Preparar): Creamos lo que necesitamos
        $calculator = new Calculator();
        
        // 2. ACT (Actuar): Ejecutamos el método a probar
        $resultado = $calculator->suma(5, 3);
        
        // 3. ASSERT (Verificar): Comprobamos que el resultado sea el esperado
        $this->assertEquals(8, $resultado);
    }

    public function testResta()
    {
        $calculator = new Calculator();
        $resultado = $calculator->resta(10, 4);
        $this->assertEquals(6, $resultado);
    }
}