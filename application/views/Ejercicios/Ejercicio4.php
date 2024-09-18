 <!--Crear un Script que compare dos variables usando operadores de comparacion y muestre los resultados-->
<?php

if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    if($valorA > $valorB){

        echo "El valor de A es mayor que el valor de B <br/>";
     }
     
     if($valorA < $valorB){
        echo "El valor A no es mayor que el valor de B";
     }

     if($valorA == $valorB){
        echo " El valor de A es igual al valor de B <br/>"; 
     }
     if($valorA != $valorB){
        echo " El valor de A es diferente al valor de B";
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
    
<form action="ejercicio4.php" method="post">

    Valor A:

    <input type="text" name="ValorA" id="">
    <br/>

    Valor B:
    <input type="text" name="ValorB" id="">
    <br/>

    <input type="Submit" value="Calcular">



</body>
</html>