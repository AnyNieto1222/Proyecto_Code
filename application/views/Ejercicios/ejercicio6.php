<!--Crear una script que use una estructura switch para mostrar el nombre del dia de la semana basado en una variable---->
<?php
function NombreDia($numeroDia) {
    switch ($numeroDia) {
        case 1:
            return "Lunes";
        case 2:
            return "Martes";
        case 3:
            return "Miércoles";
        case 4:
            return "Jueves";
        case 5:
            return "Viernes";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return "Día inválido";
    }
}


$numeroDia = 5;
$nombreDia = NombreDia($numeroDia);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>Día de la Semana</h1>
    <p>El día <?= $numeroDia ?> es <?= $nombreDia ?>.</p>
</body>
</html>
