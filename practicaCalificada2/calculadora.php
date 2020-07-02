<?php
/**Escriba una clase Calculadora que acepte dos valores como argumentos, y puedasumarlos, restarlos, multiplicarlos, o dividirlos según requerimiento.•Por ejemplo:  
$mycalc = new MiCalculadora(12, 6);
echo $mycalc- >sumar(); // Muestra 18 
echo $mycalc- >multiplicar(); // Muestra 72 
*/
class MiCalculadora
{
    private $n1;
    private $n2;

    private $suma;
    private $resta;
    private $factor;
    private $division;

    public function __construct(int $a, int $b)
    {
        $this->n1 = $a;
        $this->n2 = $b;
    }

    public function sumar() : int
    {
        return $this->suma = $this->n1 + $this->n2;
    }

    public function restar() : int
    {
        return $this->resta = $this->n1 - $this->n2;
    }

    public function multiplicar() : int
    {
        return $this->factor = $this->n1 * $this->n2;
    }

    public function dividir() : float
    {
        return $this->division = $this->n1 / $this->n2;
    }
}

$mycalc = new MiCalculadora(12, 6);
echo $mycalc->sumar();
echo "<br/>";
echo $mycalc->multiplicar();