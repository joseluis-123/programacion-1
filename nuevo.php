<?php
/**
 * Escribe una funcion que verifique si un numero es primo o no, un numero primo es un numero entero mayor a que solo es divisible entre la unidad y el mismo numero
 */
//Saber si un numero es primo. 7
$n=53;  
    if(primo($n)){
        echo " El numero $n es Primo";
        }
        else {
            echo " El numero $n no es Primo";
            }
            function primo($num){
                if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7){
                    return true;
                }
                        if($num >= 8 ){
                            if ($num%2==0 || $num%3==0 || $num%5==0) {
                                return false;
                                    }
                        }
                                    if($num >= 8 ){
                                        if ($num%2>=1 || $num%3>=1 || $num%5>=1) {
                                            return true;
                                        }
                                    }
            }

?>