<?php

class RecursoDidactico
{
    private string $nombre;
    private Tema $tema;
    private string $url;
    private TipoRecurso $tipoRecurso;

    public function __construct(string $nombre, Tema $tema, string $url, TipoRecurso $tipoRecurso)
    {
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->tipoRecurso = $tipoRecurso;
    }

    public function obtenerInformacion(): string
    {
        return "Recurso : {$this->nombre}" . PHP_EOL .
               "Tema    : {$this->tema->value}" . PHP_EOL . // Ojo utilizar ->value para accder al valor del string de un enum
               "Tipo    : {$this->tipoRecurso->value}" . PHP_EOL. 
               "URL     : {$this->url}";
    }  
}

?>