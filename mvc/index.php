<?php
require 'modelo.php';
session_start();
$mensaje = $_SESSION['mensaje'] ?? null;
unset($_SESSION['mensaje']);
$usuarios = listarUsuarios();
?>
<!DOCTYPE html>
<html>

<body>
    <?php if ($mensaje): ?>
        <p><?= htmlspecialchars($mensaje) ?></p>
    <?php endif; ?>

    <form action="procesar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Guardar</button>
    </form>

    <h3>Usuarios registrados</h3>
    <ul>
        <?php foreach ($usuarios as $u): ?>
            <li><?= htmlspecialchars($u[0]) ?> — <?= htmlspecialchars($u[1]) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>