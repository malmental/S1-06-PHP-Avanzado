<?php

echo "Este srchivo es un archvio de Notas sobra validaciones <br>";
 
try {
    echo "Esta pieza de codigo debería funciona<br>";
    throw new Exception("Esta es una excepcion personalizada ...<br>");
} catch (Throwable $e) {
    echo "Aquí tenemos el error: " . $e->getMessage();
} finally {
    echo "Esta linea Finally siempre será ejecutado sin importar nada arriba<br>";
}

echo "Esta linea SI o SI debe funciona<br>";

function sumar ($num1, $num2)
{
    if(!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los operando deben ser numeros");
    }
    return $num1 + $num2;
}

function restar ($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los operando deben ser numeros");
    }
    return $num1 - $num2;
}

function multiplicar ($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los operando deben ser numeross");
    }
    return $num1 * $num2;
}

function dividir ($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los operando deben ser numeross");
    }
    if ($num2 == 0) {
        throw new DivisionByZeroError("El divisor no puede ser 0");
    }
    return $num1 / $num2;
}

try // Dentro de este bloque colocamos todo lo que necesitamos ejecutar
{
    $resultadoSuma = sumar (5, "8");
    echo "El resultado de esta suma es: $resultadoSuma<br>";
    
    $resultadoDivision = dividir(12, 0);
    echo "El resultado de la division es $resultadoDivision<br>";

    $numero = 500;
        if ($numero < 10) {
            throw new Exception ("Este numero no cumple con la condicion");
        }

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . $e->getLine() . "<br>";
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

echo "El codigo debería seguir aqui, pese a que falló en dividir<br>";
