<?php
// Función para sumar todos los números pares en un array
function sumarNumerosPares($array) {
    // Inicializar la suma en 0
    $suma = 0;

    // Recorrer el array para encontrar los números pares
    foreach ($array as $numero) {
        // Verificar si el número es par
        if ($numero % 2 == 0) {
            // Sumar el número par a la suma acumulada
            $suma += $numero;
        }
    }

    // Retornar la suma total
    return $suma;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Calcular la suma de los números pares
$sumaPares = sumarNumerosPares($numeros);

// Imprimir el resultado
echo "El array es: " . implode(", ", $numeros) . "\n";
echo "La suma de los números pares es: $sumaPares";
?>
