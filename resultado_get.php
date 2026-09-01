<?php
$termino = $_GET['termino'] ?? '';
echo "Buscaste: " . htmlspecialchars($termino);