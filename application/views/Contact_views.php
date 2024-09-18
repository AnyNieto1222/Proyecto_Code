<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <style>
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #1e3a8f;
            width: 100%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .nav-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-list li {
            margin: 0 15px;
        }

        .nav-list li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .nav-list li a:hover {
            background-color: #314e7f;
        }

        .menu-hamburguesa {
            position: relative;
        }

        .icono-menu {
            font-size: 26px;
            color: white;
            cursor: pointer;
            display: block;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: none;
            background-color: #444;
            position: absolute;
            top: 100%;
            left: 0;
            width: 200px;
            z-index: 1000;
        }

        .menu li {
            border-bottom: 1px solid #555;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        #menu-punto:checked + .icono-menu + .menu {
            display: block;
        }

        .form-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 0px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 11px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 12px;
        }
          
          .btn {
            display: inline-block;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: bold;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            margin: 0 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-editar {
            background-color: #007bff;
        }

        .btn-editar:hover {
            background-color: #0056b3;
        }

        .btn-eliminar {
            background-color: #dc3545;
        }

        .btn-eliminar:hover {
            background-color: #c82333;
        }

        .btn-eliminar:active {
            background-color: #bd2130;
        }
    </style>
    
<h2>Agregar Contacto</h2>


<?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<?= form_open('usuarios/agregar_contacto'); ?>

<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value="<?= set_value('nombre'); ?>">
<?= form_error('nombre'); ?>

<label for="habilidades">Habilidades:</label>
<input type="text" name="habilidades" value="<?= set_value('habilidades'); ?>">
<?= form_error('habilidades'); ?>

<label for="numero_identificacion">Número de identificación:</label>
<input type="text" name="numero_identificacion" value="<?= set_value('numero_identificacion'); ?>">
<?= form_error('numero_identificacion'); ?>

<label for="Correo">Correo:</label>
<input type="text" name="Correo" value="<?= set_value('Correo'); ?>">
<?= form_error('Correo'); ?>

<button type="submit">Guardar</button>
  
<h1>Lista de Contactos</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Habilidades</th>
            <th>Número de Identificación</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($contacts)): ?>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?php echo $contact->id; ?></td>
                    <td><?php echo $contact->nombre; ?></td>
                    <td><?php echo $contact->habilidades; ?></td>
                    <td><?php echo $contact->numero_identificacion; ?></td>
                    <td><?php echo $contact->Correo; ?></td>
                    <td>
                        <a href="<?= site_url('usuarios/editar_contacto/' . $contact->id); ?>" class="btn btn-editar">Editar</a>
                        <a href="<?= site_url('usuarios/eliminar_contacto/' . $contact->id); ?>" class="btn btn-eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar este contacto?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay contactos registrados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= form_close(); ?>
</body>
</html>