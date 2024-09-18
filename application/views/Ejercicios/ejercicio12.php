<!--Crear un array asociativo de personas y sus edades, luego imprimir cada par clave-valor.-->
<?php


$personas = array(
    "Any" => 19,
    "Alejandro" => 20,
    "Santiago" => 17,
    "Andrea" => 28
);


foreach ($personas as $nombre => $edad) {
    echo "$nombre, tiene  $edad años<br>";
}
?>


