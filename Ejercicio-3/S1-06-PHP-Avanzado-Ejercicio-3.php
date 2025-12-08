<?php

// Ejemplo 1: Sobreescribiremos el metodo __toString()
// El metodo string de vuelve una representacion 
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) 
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __toString()
    {
        return "Persona: $this->nombre ($this->edad)";
    }
}

$persona = new Persona("Orlando", 38);
echo (string) $persona . PHP_EOL;