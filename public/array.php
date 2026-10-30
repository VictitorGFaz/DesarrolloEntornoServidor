<?php
$estudiantes = ["Gimenez", "Jimenez", "Faz", "Leal"];
$buscando = "Jimenez";
$comprobacion = false;

for ($i=0; $i < count($estudiantes) ; $i++) { 
    if ($estudiantes[$i] === $buscando) {
        $comprobacion = true;
        break;
    }
}

if ($comprobacion === true) {
    echo "<p>Se encuentra en la lista</p>";
} else {
    echo "<p>No se encuentra en la lista</p>";
}

?>