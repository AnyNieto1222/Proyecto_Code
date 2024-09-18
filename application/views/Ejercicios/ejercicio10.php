<!--Crear una funcion que tome dos numeros como parametros y devuelva su suma.Llamar a la funcion con diferentes valores y mostrar los resultados-->

<?php
function sumar($Valora, $Valorb) {
    return $Valora + $Valorb;
}


$resultado1 = sumar(3, 5);
$resultado2 = sumar(10, 20);
$resultado3 = sumar(4, 7);

echo "La suma de 3 y 5 es: " . $resultado1 . "<br/>";
echo "La suma de 10 y 20 es: " . $resultado2 . "<br/>";
echo "La suma de 4 y 7 es: " . $resultado3 . "<br/>";
?>
