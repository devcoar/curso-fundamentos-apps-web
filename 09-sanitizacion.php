<?php
$comentario = $_POST['comentario'] ?? '';

// 1) Elimina espacios sobrantes al inicio/final
$comentario = trim($comentario);

// 2) Convierte caracteres especiales a entidades HTML (previene XSS)
$comentario_seguro = htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8');

// 3) Limpieza de tipos específicos
$email_limpio = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$numero       = filter_var($_POST['cantidad'] ?? '', FILTER_SANITIZE_NUMBER_INT);

echo 'Email limpio: '.$email_limpio.'<br>';
echo "Comentario publicado: " . $comentario_seguro;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizacion</title>
</head>
<body>
    <form action="#" method="post">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" id="comentario"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>