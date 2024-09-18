<!--Crear un array multidimensional que contenga informacion sobre libros (titulo, autor, año) y recorrerlo para imprimir losdetalles de de cada libro-->
 
<?php

$libros = array(
    array(
        "titulo" => "Cien años de soledad",
        "autor" => "Gabriel García Márquez",
        "año" => 1967
    ),
    array(
        "titulo" => "El tunel",
        "autor" => "Ernesto Sabato",
        "año" => 1948
    ),
    array(
        "titulo" => "Las ventajas de ser invisible",
        "autor" => " Stephen Chbosky",
        "año" => 1999
    )
);

foreach ($libros as $libro) {
    echo "Título: " . $libro["titulo"] . "<br>";
    echo "Autor: " . $libro ["autor"] . "<br>";
    echo "Año de publicación: " . $libro["año"] . "<br><br>";
}
?>
