<?php
$nombre = $_POST['nombre'] ?? 'visitante';
$hora = (int) date('H');

if ($hora < 12) {
    $saludo = "¡Buenos días";
} elseif ($hora < 19) {
    $saludo = "¡Buenas tardes";
} else {
    $saludo = "¡Buenas noches";
}
?>
<!DOCTYPE html>
<html>

<body>
    <h1><?= $saludo . ", " . htmlspecialchars($nombre) ?>!</h1>
    <p>Tildaste: </p>
    <ul>
        <?php
        $intereses = $_POST['intereses'] ?? [];
        foreach ($intereses as $interes) {
            echo "<li>" . htmlspecialchars($interes) . "</li>";
        }
        ?>
    </ul>
    <form action="#" method="POST">
        <fieldset>
            <legend>Intereses</legend>
            <input type="checkbox" id="deporte" name="intereses[]" value="deporte">
            <label for="deporte">Deporte</label>

            <input type="checkbox" id="musica" name="intereses[]" value="musica">
            <label for="musica">Música</label>
        </fieldset>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>