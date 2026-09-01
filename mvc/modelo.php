<?php
function guardarUsuario(array $datos): void {
    $linea = $datos['nombre'] . "," . $datos['email'] . "\n";
    file_put_contents('usuarios.csv', $linea, FILE_APPEND);
}

function listarUsuarios(): array {
    if (!file_exists('usuarios.csv')) return [];
    $lineas = file('usuarios.csv', FILE_IGNORE_NEW_LINES);
    return array_map(fn($l) => str_getcsv($l), $lineas);
}