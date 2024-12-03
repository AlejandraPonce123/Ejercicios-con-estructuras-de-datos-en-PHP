<?php
// Función para calcular la frecuencia de caracteres en una cadena
function frecuenciaCaracteres($cadena) {
    // Inicializar un array asociativo vacío para almacenar la frecuencia
    $frecuencias = [];

    // Recorrer cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Si el carácter ya existe en el array, incrementar su contador
        if (isset($frecuencias[$caracter])) {
            $frecuencias[$caracter]++;
        } else {
            // Si no existe, inicializar el contador en 1
            $frecuencias[$caracter] = 1;
        }
    }

    // Retornar el array asociativo con las frecuencias
    return $frecuencias;
}

// Ejemplo de uso
$texto = "Ejercicio de frecuencia de caracteres"; 

// Obtener la frecuencia de caracteres
$resultado = frecuenciaCaracteres($texto);

// Imprimir el resultado
echo "Texto original: '$texto'<br>";
echo "Frecuencia de caracteres:<br>";

// Recorrer el array asociativo para mostrar las frecuencias
foreach ($resultado as $caracter => $frecuencia) {
    echo "Carácter '$caracter': $frecuencia<br>";
}
?>
