<?php
session_start();

$nombre = trim($_POST['nombre'] ?? '');

if ($nombre === '') {
    $_SESSION['mensaje'] = ['tipo' => 'error', 'texto' => 'El nombre es obligatorio'];
} else {
    // ... guardar datos ...
    $_SESSION['mensaje'] = ['tipo' => 'exito', 'texto' => '¡Registro completado!'];
}

// Redirige con GET para evitar el reenvío del formulario al recargar
header("Location: resultado.php");
exit; // siempre cortar la ejecución después de un header Location