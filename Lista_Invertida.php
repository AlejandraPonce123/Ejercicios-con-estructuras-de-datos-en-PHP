<?php
// Función para invertir un array de números
function listaInvertida($array) {
    // Utilizar la función array_reverse para invertir el array
    $arrayInvertido = array_reverse($array);

    // Retornar el array invertido
    return $arrayInvertido;
}

// Ejemplo
$numeros = [1, 2, 3, 4, 5]; 

// Obtener el array invertido
$arrayInvertido = listaInvertida($numeros);

// Imprimir el resultado
echo "Array original: " . implode(", ", $numeros) . "\n";
echo "Array invertido: " . implode(", ", $arrayInvertido);
?>
