<?php
class PhoneException extends Exception
{
    public function __construct($message = "Debe ingresar solo números")
    {
        parent::__construct($message);
    }
}

?>