<?php
// Definimos la ruta del archivo donde se guardarán los eventos.
// __DIR__ apunta al directorio actual del archivo PHP.
define('ARCHIVO_TXT', __DIR__ . '/eventos.txt');

// Definimos la ruta del archivo CSV donde guardaremos la información de usuarios.
define('ARCHIVO_CSV', __DIR__ . '/usuarios.csv');

// Función que recibe un array con la información del evento y lo guarda en un archivo .txt.
function guardarEnTxt(array $evento) {
    // Armamos el texto que se va a escribir en el archivo.
    $texto  = "===EVENTO===\n";
    $texto .= "Título: {$evento['titulo']}\n";
    $texto .= "===FIN EVENTO===\n\n";

    // Guardamos el contenido al final del archivo, con bloqueo para evitar conflictos.
    if (!file_put_contents(ARCHIVO_TXT, $texto, FILE_APPEND | LOCK_EX)) {
        // Si falla la escritura, mostramos un mensaje de error.
        echo "Error al guardar el evento en el archivo de texto.";
    } else {
        // Si la escritura fue exitosa, avisamos al usuario.
        echo "Evento guardado correctamente en el archivo de texto.";
    }
}

// Función que recibe un array con nombre y email y los agrega al archivo CSV.
function guardarEnCsv(array $datos): void {
    // Creamos una línea en formato CSV: nombre,email.
    $linea = $datos['nombre'] . "," . $datos['email'] . "\n";

    // Agregamos la línea al final del archivo CSV y usamos bloqueo para evitar problemas de concurrencia.
    if (!file_put_contents(ARCHIVO_CSV, $linea, FILE_APPEND | LOCK_EX)) {
        // Si la escritura falla, informamos al usuario.
        echo "Error al guardar los datos en el archivo CSV.";
    } else {
        // Si se guarda correctamente, mostramos un mensaje de éxito.
        echo "Datos guardados correctamente en el archivo CSV.";
    }
}

// Ejemplo de uso: guardamos un evento ficticio para probar la función.
// guardarEnTxt(array('titulo' => 'Evento de prueba'));

// Ejemplo de uso: guardamos una persona ficticia en el archivo CSV.
guardarEnCsv(array('nombre' => 'Juand', 'email' => 'juan@example.com'));
