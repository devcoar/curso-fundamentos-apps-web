<?php
// Verificación de datos — `isset()` y `empty()`

// ¿Existe el campo? (evita "Undefined array key")
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $nombre = 'Invitado';
}

// Forma más corta con operador null-coalescing
$nombre = $_POST['nombre'] ?? 'Invitado';

// ¿Está vacío?
if (empty($_POST['usuario'])) {
    echo "El usuario es obligatorio";
}