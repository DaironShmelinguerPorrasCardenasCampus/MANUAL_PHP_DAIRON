<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 10;  
$y = 6;
echo "ESTO ES UN EJEMPLO DE LOS OPERADORES ARITMÉTICOS";
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x ** $y;


echo "<br><br>";
echo "ESTE ES UN EJEMPLO DE LOS OPERADORES DE ASIGNACIÓN";
$x = 20;  
$x += 100;

echo "<br>";
echo $x;

echo "<br><br>";
echo "ESTE ES UN EJEMPLO DE LOS OPERADORES DE COMPARACIÓN";
$x = 100;  
$y = "100";

echo "<br>";
var_dump($x === $y);

echo "<br><br>";
echo "ESTE ES UN EJEMPLO DE LOS OPERADORES DE INCREMENTO-DECREMENTO";
$x = 10;  
echo "<br>";
echo ++$x;
echo "<br>";
echo --$x;

echo "<br><br>";
echo "ESTE ES UN EJEMPLO DE LOS OPERADORES DE LÓGICO";
$x = 100;  
$y = 50;
echo "<br>";
if ($x == 100 and $y == 50) {
    echo "HOLA A TODOS";
}
?>




</body>
</html>