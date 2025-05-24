function procesarArray($numeros){
    $suma = 0;
    $min = $numeros[0];
    $max = $numeros[0];
    $count = 0;

    foreach($numeros as $n){
        $suma += $n;
        if($n < $min) $min = $n;
        if($n > $max) $max = $n;
        $count++;
    }

    $promedio = $count > 0 ? $suma / $count : 0;

    echo "Resultados:\n";
    echo "- Valor mínimo: $min\n";
    echo "- Valor máximo: $max\n";
    echo "- Suma total: $suma\n";
    echo "- Promedio: $promedio\n";
}

$datos = [8, 3, 15, 22, 7, 9, 13];
procesarArray($datos);
