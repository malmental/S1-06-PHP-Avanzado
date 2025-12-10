<?php

// Ejemplo 1: Sobreescribiremos el metodo __toString()

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