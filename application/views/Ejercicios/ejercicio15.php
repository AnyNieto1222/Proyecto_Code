<!--Crear un script que tome una cadena de texto, reemplace con una palabra especifica por otra y la imprima-->
<?php
$original= "Hola Viviana, estos son los ejercicios completos";


$modificado = str_replace("Viviana, estos son los ejercicios completos", "Any, ya terminaste todos los ejercicios", $original);


echo $modificado;
?>
