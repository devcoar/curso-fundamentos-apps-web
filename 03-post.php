<?php

$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

// Los datos NO aparecen en la URL ni en el historial del navegador
echo "Bienvenido, " . htmlspecialchars($usuario);
echo "" . htmlspecialchars($clave);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo POST</title>
</head>

<body>
    <form action="#" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave">

        <button type="submit">Ingresar</button>
    </form>

</body>

</html>