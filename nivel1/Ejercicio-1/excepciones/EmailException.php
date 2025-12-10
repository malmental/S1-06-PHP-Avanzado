<?php


class EmailException extends Exception
{
    public function __construct($message = "Correo electrónico inválido")
    {
        parent::__construct($message);
    }
}

?>