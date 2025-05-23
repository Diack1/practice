<?php

function filtrarPalabrasPorLongitud($palabras, $longitudMinima) {
    $resultado = [];

    foreach ($palabras as $palabra) {
        if (strlen($palabra) >= $longitudMinima) {
            $resultado[] = $palabra;
        }
    }

    return $resultado;
}

$palabras = ["gato", "elefante", "sol", "mariposa", "perro"];
$longitud = 5;

$filtradas = filtrarPalabrasPorLongitud($palabras, $longitud);

echo "Array original:<br>";
print_r($palabras);

echo "<br><br>Palabras con longitud mayor o igual a $longitud:<br>";
print_r($filtradas);

?>
