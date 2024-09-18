<!--Crear un Script que realice y muestre el resultado de operaciones aritmeticas entre dos variables-->
<?php

if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    //Suma
    $suma=$valorA+$valorB; 
    //Resta
    $Resta=$valorA-$valorB; 
    //Multiplicacion
    $Multiplicacion=$valorA*$valorB; 
   //Division
    $Division=$valorA/$valorB; 

    echo "<br/> Suma " .$suma;
    echo "<br/> Resta ".$Resta;
    echo "<br/> Multiplicación " .$Multiplicacion;
    echo "<br/> División " .$Division;
    
   
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
    
<form action="ejercicio3.php" method="post">

    Valor A:

    <input type="text" name="ValorA" id="">
    <br/>

    Valor B:
    <input type="text" name="ValorB" id="">
    <br/>

    <input type="Submit" value="Calcular">



</body>
</html>