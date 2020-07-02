<?php
/** Considere el código del gráfico a) Implemente un constructor que inicialice los nuevos objetos de la clase
 *  date en 1 de enero de 2018. b) Implemente el método advance, que incrementa la fecha ingresada al siguiente, asegurando que toda la fecha se actualiza correctamente. */
class Dato
{
    private $day;
    private $month;
    private $year;

    public function __construct(int $d, int $m, int $y)
    {
        $this->day = $d;
        $this->month = $m;
        $this->year = $y;
    }

    public function advance()
    {
        if ($this->day>=1 && $this->day<=30) {
            $this->day+=1;
            $this->getFecha();
        }
        else {
            $this->day=1;
            $this->month +=1;
            if($this->month==12){
                $this->month=1;
                $this->year +=1;
            }
            $this->getFecha();
        }
    }

    public function getFecha()
    {
        echo "{$this->day} - {$this->month} - {$this->year} <br/>";
    }
}

$fecha = new Dato(1,1,2018);
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
$fecha->advance();
?>