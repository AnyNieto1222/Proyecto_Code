<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e3a8f, #1e3a8f);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Contenedor del formulario */
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Estilos de los labels y campos de entrada */
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #1e3a8f;
        }

        /* Estilos del botón */
        button {
            background-color: #1e3a8f;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
            font-size: 1rem;
        }

        button:hover {
            background-color: #1e3a6f;
            transform: translateY(-2px);
        }

        /* Estilos de los mensajes de error */
        .error {
            color: #ff6b6b;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Ingresa tus datos</h2>
        <?= form_open('login/milogin'); ?>
        
        <!-- Nombre de usuario -->
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>" required>
        <?= form_error('nombre', '<div class="error">', '</div>'); ?>
        
        <!-- Contraseña -->
        <label for="numero">Contraseña:</label>
        <input type="password" id="numero" name="numero" value="<?= set_value('numero'); ?>" required>
        <?= form_error('numero', '<div class="error">', '</div>'); ?>
        
        <button type="submit">Enviar</button>

        <!-- Mensaje de error si las credenciales son incorrectas -->
        <?php if ($this->session->flashdata('error')): ?>
            <div class="error">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        
        <?= form_close(); ?>
    </div>
</body>
</html>
