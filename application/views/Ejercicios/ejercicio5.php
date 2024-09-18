<!-- Crear un script que use una estructura if/else para verificar si una personan es mayor de edad (>= 18 ) y muestre un mensaje adecuado --->

 
 <?php

if($_POST){

    $valorA = $_POST['ValorA'];
  
    if($valorA >= 18){
        echo "Eres mayor de edad <br/>";
    } else {
        echo "Eres menor de edad";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    
<form action="ejercicio5.php" method="post">

    Ingresar edad:

    <input type="text" name="ValorA" id="">
    <br/>

    <input type="Submit" value="Enviar">



</body>
</html>