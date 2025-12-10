<?php

class EmptyFieldException extends Exception
{
    public function __construct($message = "Todos los campos son requeridos")
    {
        parent::__construct($message);
    }
}
?>