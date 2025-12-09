<?php

class Automovil
{
    public string $marca;
    public string $matricula;
    public string $tipoCombustible;
    public int $velocidadMaxima;
    public Turbo $turbo;

    public function __construct(string $marca, string $matricula, string $tipoCombustible, int $velocidadMaxima)
    {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->tipoCombustible = $tipoCombustible;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->turbo = new Turbo();
    }

    public function getDatos(): void
    {
        echo "Estos son los datos del automovil: " . PHP_EOL;
        print_r($this->getAutomovil()) . PHP_EOL;
        echo "Activando el turbo ..." . PHP_EOL;
        $this->turbo->boost();
    }

    public function getAutomovil(): array
    {
        return [
            'Marca' => $this->marca . PHP_EOL,
            'Matricula' => $this->matricula . PHP_EOL,
            'Tipo de combustible' => $this->tipoCombustible . PHP_EOL,
            'Velocidad maxima' => $this->velocidadMaxima . ' km/h' . PHP_EOL,
        ];
    }
}