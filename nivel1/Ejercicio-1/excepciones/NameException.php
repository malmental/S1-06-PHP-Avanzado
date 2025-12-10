<?php

class NameException extends Exception
{
    public function __construct($message = "Nombre contiene caracteres no permitidos")
    {
        parent::__construct($message);
    }
}

?>