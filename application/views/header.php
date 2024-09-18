<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        /* Estilos aquí */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f4f5;
        }

        header {
            background-color: #1e3a8f;
            padding: 20px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
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

        .logout-button {
            background-color: #ff4b4b;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        .logout-button:hover {
            background-color: #d43f3f;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <!-- Menú hamburguesa -->
            <ul class="nav-list">
                <li>
                    <div class="menu-hamburguesa">
                        <input type="checkbox" id="menu-punto">
                        <label for="menu-punto" class="icono-menu">&#9776;</label>
                        <ul class="menu">
                            <li><a href="<?php echo site_url('ejercicios/ejercicios1'); ?>">Semana 1-2</a></li>
                            <li><a href="#">Semana 3-4</a></li>
                            <li><a href="#">Semana 5-6</a></li>
                        </ul>
                    </div>
                </li>
                <!-- Enlaces principales de la navegación -->
                <li><a href="<?php echo site_url('Home/home_message'); ?>">Inicio</a></li>
                <li><a href="<?php echo site_url('Contact/Contact_views'); ?>">Contacto</a></li>
                <!-- Botón de Cerrar Sesión -->
                <li>
                    <form action="<?= site_url('login/logout'); ?>" method="post">
                        <button type="submit" class="logout-button">Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
