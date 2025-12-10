<?php
require_once "Turbo.php";

class Automovil
{
    
    public string $marca;
    public string $matricula;
    public string $tipoCombustible;
    public int $velocidadMaxima;

    use Turbo;
    
    public function __construct(string $marca, string $matricula, string $tipoCombustible, int $velocidadMaxima)
    {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->tipoCombustible = $tipoCombustible;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    public function UseTrait() 
    {
        $this->boost();
    }
}