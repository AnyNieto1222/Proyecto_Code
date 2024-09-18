<!DOCTYPE html>
<html>
<head>
    <title>Vista Ejercicios</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background: radial-gradient( #2a5298,#3e677c, #2a4556);
    color: white;
    text-align: center;
}

h1 {
    font-size: 3em;
    margin-top: 20px;
    text-transform: uppercase;
    letter-spacing: 5px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

h2 {
    font-size: 2em;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

p {
    font-size: 1.2em;
    width: 80%;
    margin: 0 auto 30px;
    line-height: 1.5;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin: 15px 0;
}

a {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.1em;
    color: #ffffff;
    text-decoration: none;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: rgba(255, 255, 255, 0.4);
}
</style>
<body>
    <h1>Ejercicios</h1>
    <h2>Semana 1</h2>
    <p>Aca encontraremos les ejercicios propuesta la semana 1 y 2</p>
   <ul>
        <li><a href="<?php echo site_url('ejercicios/semana1_array_ejercicio'); ?>">Array Ejercicio</a></li>
        <li><a href="<?php echo site_url('ejercicios/semana1_switch_ejercicio'); ?>">Switch Ejercicio</a></li>
        <li><a href="<?php echo site_url('ejercicios/semana1_foreach_ejercicio'); ?>">Foreach Ejercicio</a></li>
        
    </ul>
</body>
</html>
