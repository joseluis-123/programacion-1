
<?php 
//function nombre_funcion(int $parametros): string{
   // $parametros= $parametros + 123;
    
   // return $parametros;


//}
//$nro = 12312;
//$mensaje = "Hola Mundo desde una funcion";
//echo nombre_funcion($nro);

//utilizar el algoritmo visto en while.php
//para crear un funcion que genere de n elementos 
//y se corte con un factor m donde es numero de
//celdas y m es cuanto dara el salto de fila

function generarTabla($n,$m)
{
    echo "<table border='1' cellspacing='0'>
    <tbody>
    <tr>";

    $i = 1;
    while ($i <= $n) {
        echo "<td style='width: 30px'>$i</td>";
        if ($i % $m == 0) {
            echo "</tr><tr>";
        }
        $i++;
    }

    echo "</tbody>
    </table>";
}
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="varn" placeholder="Ingrese n"/><br>
    <input type="text" name="varm" placeholder="Ingrese m"/><br>
    <input type="submit" name="submit" value="Enviar"/>
</form>
<?php
if (isset($_POST["submit"])) {
    $n =  $_POST["varn"];
    $m =  $_POST["varm"];
    generarTabla($n, $m);
}
?>