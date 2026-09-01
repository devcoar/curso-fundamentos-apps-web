<?php

$errores = [];

$titulo = trim($_POST['titulo'] ?? '');
$descripcion = trim($_POST['descripcion'] ?? '');

// Campo obligatorio
if ($titulo === '') {
    $errores[] = "El titulo es obligatorio.";
}

if (strlen($descripcion) < 20) {
    $errores[] = "Tiene que ser mas de 20 caracteres";
}

if (count($errores) > 0) {
    foreach ($errores as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} else {
    echo "<p style='color:green;'>Datos válidos, procesando registro...</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Validacion</title>
</head>

<body>
    <h2>Publicar nuevo evento</h2>
    <form action="#" method="POST">
        <fieldset>
            <legend>Datos generales</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo">
            <label for="descripcion">Descripción: </label>
            <textarea name="descripcion" id="descripcion"></textarea>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria">
                <option value="academico">Academico</option>
                <option value="cultural">Cultural</option>
                <option value="deportivo">Deportivo</option>
                <option value="otro">Otro</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Fecha y horario</legend>
            <label for="fecha">Fecha del evento: </label>
            <input type="date" name="fecha" id="fecha">
        </fieldset>
        <button type="submit">Publicar evento</button>
    </form>
</body>

</html>