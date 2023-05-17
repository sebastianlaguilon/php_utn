<?php
define('PI', 3.14159); // Definir la constante PI

//funcion para calcular area
function calcularAreaCirculo($radio) {
    $area = PI * ($radio * $radio);
    return $area;
}

$radio = 5; // Radio del círculo
$area = calcularAreaCirculo($radio);

//variables
$numero_1 = 25;
$numero_2 = 50;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>AIO - Módulo 1</title>
</head>
<body>
    <div>
        Actividad Integradora Obligatoria Módulo 1
    </div>
    <h1>Calculo del Area de un Circulo</h1>
    <?php
    echo "<p>Siendo el radio del circulo de :".$radio ." cm</p>";
    echo "<p>el area del circulo es de :" . $area. " cm</p>";
    ?>
    <?php echo "<h1>Realizar operaciones con los siguentes numeros</h1>";
    echo "<h2> N° 1 = ". $numero_1. "</br></h2>";
    echo "<h2> N° 2 = ". $numero_2."</br></h2>";
    echo "<h3> la suma de ".$numero_1. " + ".$numero_2 ." es  = ". $numero_1 + $numero_2."</h3>";
    echo "<h3> la resta de ".$numero_1. " - ".$numero_2 ." es  = ". $numero_1 - $numero_2."</h3>";
    echo "<h3> la multiplicacion de ".$numero_1. " * ".$numero_2 ." es  = ". $numero_1 * $numero_2."</h3>";
    echo "<h3> la divicion de ".$numero_1. " / ".$numero_2 ." es  = ". $numero_1 / $numero_2."</h3>";
    ?>

</body>
<footer>
    Sebastian Laguilon DNI 24094825
</footer>
</html>