<?php

class NombreDeTest
{
    public function testNombre()
    {
        // Lo que debe hacer el código, ACT
        $resultado = $this->miClase->metodo();

        // Lo que debe ocurrir, ASSERT
        $this->assertEquals(10, $resultado); // Verifica el resultado
    }

    public function testFallido()
    {
        $this->expectException(\Exception::class); // Espero un error
        $this->expectExceptionMessage("Este mensaje"); // Mensaje específico
        $this->miClase->metodoQueFalla(); // Esto debe fallar
    }
}

?>

