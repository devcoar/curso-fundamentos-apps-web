<?php
// Dato de un formulario GET
$pagina = $_GET['pagina'];

// Dato de un formulario POST
$nombre = $_POST['nombre'];

// Archivo subido (con enctype="multipart/form-data" y <input type="file">)
$archivo = $_FILES['documento'];

echo $archivo['name'];       // nombre original del archivo
echo $archivo['tmp_name'];   // ubicación temporal en el servidor
echo $archivo['size'];       // tamaño en bytes