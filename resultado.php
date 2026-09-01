<?php
session_start();
$mensaje = $_SESSION['mensaje'] ?? null;
unset($_SESSION['mensaje']); // el mensaje flash se muestra una sola vez
?>
<!DOCTYPE html>
<html>
<body>
    <?php if ($mensaje): ?>
        <p class="<?= $mensaje['tipo'] ?>">
            <?= $mensaje['tipo'] === 'exito' ? '✅' : '❌' ?>
            <?= htmlspecialchars($mensaje['texto']) ?>
        </p>
    <?php endif; ?>
</body>
</html>