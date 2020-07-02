<?php
/**Escribir una clase que muestre la siguiente frase: “MiClase ha sido inicializada” cadavez que se cree un objeto */

class MiCalculadora 
{
    public function __construct()
    {
        echo  "Mi calculadora ha sido inicializada";
    }
}

$calculadora = new MiCalculadora();
