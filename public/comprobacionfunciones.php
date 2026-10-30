<?php
function suma(array $n1){
    $total = 0;
    for ($i=1; $i < count($n1) ; $i++) { 
        $total += $n1[$i];
    }
    return $total;
}
function media(array $n1){
    $media =  suma($n1) / (count($n1)-1);
    return $media;
}

while ($linea = fgets(STDIN)) {
    $datos = explode(" ", trim($linea));

    if (count($datos) > 2 ) {
        
        switch ($datos[0]) {
            case 'suma':
                echo "<p>La suma de los números es: ".suma($datos)."</p>";
                break;
            case 'media':
                echo "<p>La media de los números es: ".media($datos)."</p>";
                break;      
            default:
                echo "<p>(Error) Operación no permitida</p>";
                break;
        }
    } else {
            echo "<p>(Error) No dispongo de suficientes argumentos.</p>";
    }
    echo "\n";
}