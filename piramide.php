<?php
// Función para imprimir una pirámide de asteriscos
function imprimirPiramide($altura) {
    // Validar que la altura sea mayor a 0
    if ($altura <= 0) {
        echo "La altura debe ser mayor a 0.<br>";
        return;
    }

    // Bucle externo para cada nivel de la pirámide
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios en blanco
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo "&nbsp;";
        }
        // Imprimir asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Salto de línea
        echo "<br>";
    }
}

$altura = 5; 

echo "Pirámide de altura $altura:<br>";
imprimirPiramide($altura);
?>