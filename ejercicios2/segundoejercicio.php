<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nro 1
    <input type="text" name="nro1" id="nro1"/><br/>
    <small id="mensaje" style="color: red;"></small><br/>
    Nro 2
    <input type="text" name="nro2" id="nro2"/><br/>
    <button onclick="comparar()">Calcular</button>

    <p id="resultado"> </p>
</body>
<script>
 function comparar(){
        var nro1 = parseInt(document.getElementById("nro1").value);
        var nro2 = parseInt(document.getElementById("nro2").value);

        if(nro1 > nro2){
            document.getElementById("resultado").innerHTML = " " + nro1 + " es mayor";
        }
        
        if(nro2 > nro1){
            document.getElementById("resultado").innerHTML = " " + nro2 + " es mayor";
        } 
        
    }
</script>
</html>