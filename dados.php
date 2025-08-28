<?php
// Practica 1: Tirada de dados aleatoria

// Generamos un número aleatorio de dados entre 2 y 7
$numDados = rand(2, 7);

// Creamos un array vacío para almacenar los valores de los dados
$dados = array();

// Bucle for para generar cada valor aleatorio de dado (entre 1 y 6)
for ($i = 0; $i < $numDados; $i++) {
    $dados[$i] = rand(1, 6); // añadimos un valor al array
}

// Mostramos información sobre la tirada
echo "<h2>Tirada de $numDados dados</h2>";

// Bucle for para mostrar los valores de cada dado
echo "<ul>";
for ($i = 0; $i < $numDados; $i++) {
    echo "<li>Dado " . ($i+1) . ": " . $dados[$i] . "</li>";
}
echo "</ul>";

// Opcional: también se puede mostrar los valores en línea
echo "<p>Valores de la tirada: ";
for ($i = 0; $i < $numDados; $i++) {
    echo $dados[$i];
    if ($i < $numDados - 1) echo ", ";
}
echo "</p>";
?>
