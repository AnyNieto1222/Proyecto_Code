<!--Crear un formulario HTML que envie datos usando el metodo POST. Procesar y mostrar los datos en un Script PHP-->
<?php
   if ($_POST){


$nombre=$_POST['txtNombre']; 
$apellido=$_POST['txtApellido'];

echo $nombre."".$apellido;
}

