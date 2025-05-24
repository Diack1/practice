function unidades($n) {
    switch ($n) {
        case 1: return 'uno';
        case 2: return 'dos';
        case 3: return 'tres';
        case 4: return 'cuatro';
        case 5: return 'cinco';
        case 6: return 'seis';
        case 7: return 'siete';
        case 8: return 'ocho';
        case 9: return 'nueve';
        default: return '';
    }
}

function decenas($n) {
    if ($n < 10) {
        return unidades($n);
    }
    if ($n >= 10 && $n <= 15) {
        $especiales = [
            10 => 'diez',
            11 => 'once',
            12 => 'doce',
            13 => 'trece',
            14 => 'catorce',
            15 => 'quince'
        ];
        return $especiales[$n];
    }
    if ($n >= 16 && $n <= 19) {
        return 'dieci' . unidades($n - 10);
    }
    if ($n === 20) {
        return 'veinte';
    }
    if ($n >= 21 && $n <= 29) {
        return 'veinti' . unidades($n - 20);
    }
    $t = intdiv($n, 10);
    $u = $n % 10;
    $prefijos = [
        3 => 'treinta',
        4 => 'cuarenta',
        5 => 'cincuenta',
        6 => 'sesenta',
        7 => 'setenta',
        8 => 'ochenta',
        9 => 'noventa'
    ];
    $texto = $prefijos[$t];
    if ($u > 0) {
        $texto .= ' y ' . unidades($u);
    }
    return $texto;
}

function numeroALetras($n) {
    if ($n < 1 || $n > 99) {
        return 'Fuera de rango';
    }
    return decenas($n);
}

// Ejemplos de uso
$ejemplos = [1, 9, 10, 11, 15, 16, 20, 21, 25, 30, 44, 58, 73, 99];
foreach ($ejemplos as $num) {
    echo $num . " → \"" . numeroALetras($num) . "\"\n";
}
