<?php
/**
 * Escribe una función que verifique si un número es primo o no, un numero primo esun numero entero mayor a que solo es divisible entre la unidad y el mismo numero
 */
function esPrimo(int $numero) : string
{
    $primo = "El $numero no es Primo";

    $modulo1 = $numero%1;
    $modulo2 = $numero%$numero;

    if ($modulo1 == 0 && $modulo2 == 0) {
        $primo = "El $numero si es Primo";
    }

    return $primo;
}

echo esPrimo(5);
?>