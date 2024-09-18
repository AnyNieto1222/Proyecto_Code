<?php
//Crear un formulario HTML simple que envie datos usando el metodo Get. procesar y mostar los datos en  un Script PHP 
if($_GET){

    $Nombre=$_GET['Nombre']; 
    $Apellido=$_GET['Apellido'];

    echo "Hola Usuario " .$Nombre. $Apellido; 
}
?>

