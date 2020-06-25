 <?php 
 $hola="index";
 $mensaje="Hola mundo";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $hola; ?></title>
     <style>
         h1{
             background-color: lightblue;
             padding: 30px;
         }

     </style>
 </head>
 <body>
     <h1>
 <?php 
//$mensaje = "Hola Mundo";
//$variable = 34;
//$variable = true;
 echo $mensaje.', bienvenido';
 echo"<br>";
 echo 2.1+1,4;
 echo"<br>";
 $array1= array(1,2,3,4);
 $array2= array( 
     "nombre" => "Josè",
     "apellido" => "Campos");
 echo $array1[3]."<br>";
 echo $array2["apellido"];
 echo"<br>";
 //ejemplo de identidad
 $a=5;
 echo --$a ;
 ?>
</h1>
    
 </body>
 </html>
