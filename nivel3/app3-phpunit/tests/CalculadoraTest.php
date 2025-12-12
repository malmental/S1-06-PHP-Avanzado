<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../src/Calculadora.php';

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    // Aqui declaro el 'objeto' de prueba
    private $calculadora;

    // Este es como el constructor de los tests
    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }


    // Se declara una funcion por cada cosa que se requiera testear
    public function testSumar()
    {
        $a = 5;
        $b = 3;

        // se accede con $this al objeto y desde ahi llamamos al metodo sumar() y le da el valor a $resultado
        $resultado = $this->calculadora->sumar($a, $b);

        // Assert para verificar que dos variables sean iguales
        $this->assertEquals(8, $resultado);
    }

    public function testRestar()
    {
        $resultado = $this->calculadora->restar(10, 4);
        $this->assertEquals(6, $resultado);
    }

    public function testMultiplicar()
    {
        $resultado = $this->calculadora->multiplicar(3, 4);
        $this->assertEquals(12, $resultado);
    }

    public function testDividir()
    {
        $resultado = $this->calculadora->dividir(10, 2);
        $this->assertEquals(5, $resultado);
    }

    public function testDividirPorCeroLanzaExcepcion()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("No se puede dividir por cero");

        $this->calculadora->dividir(10, 0);
    }
}
// Siempre rellenar el setUp() para crear un objeto de prueba; 

?>