<?php
require 'modelo.php';
session_start();

$nombre = trim($_POST['nombre'] ?? '');
$email  = trim($_POST['email'] ?? '');

if ($nombre !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    guardarUsuario(['nombre' => $nombre, 'email' => $email]);
    $_SESSION['mensaje'] = "Usuario guardado correctamente.";
} else {
    $_SESSION['mensaje'] = "Datos inválidos.";
}

header("Location: index.php");
exit;