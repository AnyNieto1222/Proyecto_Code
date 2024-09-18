<!DOCTYPE html>
<html>
<head>
    <title>Array</title>
    
</head>
<body>
    <h1>Array Ejercicio</h1>
    <?php
    $fruits = array ('Apple', 'Banana', 'Cherry');
    echo '<ul>';
    foreach ($fruits as $fruit) {
        echo '<li>' . $fruit . '</li>';
    }
    echo '</ul>';
    ?>
</body>
</html>
