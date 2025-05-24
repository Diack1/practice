function unidades($n){
    $u=["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve"];
    return $u[$n];
}
function decenas($n){
    if($n<10) return unidades($n);
    if($n<=15){
        $s=["diez","once","doce","trece","catorce","quince"];
        return $s[$n-10];
    }
    if($n<20){
        $resto=$n-10;
        $u=unidades($resto);
        if($resto==6) $u="seis";
        return "dieci".$u;
    }
    if($n<30){
        $resto=$n-20;
        $u=($resto>0?unidades($resto):"");
        if($resto==2) $u="dos";
        if($resto==3) $u="tres";
        if($resto==6) $u="seis";
        return "veinti".$u;
    }
    $tens=[0,"","treinta","cuarenta","cincuenta","sesenta","setenta","ochenta","noventa"];
    $d=floor($n/10);
    $r=$n%10;
    $decena=$tens[$d];
    return $r? $decena." y ".unidades($r): $decena;
}
function numeroALetras($n){
    if($n<0||$n>99) return "";
    if($n<30) return decenas($n);
    return decenas($n);
}
$ejemplos=[1,9,10,11,15,16,21,25,30,33,40,47,58,70,85,99];
foreach($ejemplos as $n){
    echo $n.' → "'.numeroALetras($n).'"'."\n";
}
