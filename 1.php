<?php

$numeros = [10, 25, 30, 5, 90, 45];

$suma = 0;
$min = $numeros[0];
$max = $numeros[0];
$contador = 0;

foreach ($numeros as $numero) {
    $suma += $numero;
    $contador++;

    if ($numero < $min) {
        $min = $numero;
    }

    if ($numero > $max) {
        $max = $numero;
    }
}

$promedio = $suma / $contador;

echo "<ul>";
echo "<li>Valor mínimo: $min</li>";
echo "<li>Valor máximo: $max</li>";
echo "<li>Promedio: $promedio</li>";
echo "<li>Suma total: $suma</li>";
echo "</ul>";

?>
