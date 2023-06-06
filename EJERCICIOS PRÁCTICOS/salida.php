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
    echo "ESTE EN UN EJEMPLO DE LA FUNCIÓN DE ECHO";
?>

<br><br>
<?php

    $printeje = "SOY UN EJEMPLO DE PRINT";
    printf($printeje);

?>

<br><br>
<?php

    $sprinteje = "SOY UN EJEMPLO DE SPRINTF";
    $mensaje = sprintf("HOLA", $sprinteje);
    echo $mensaje;

?>

<br><br>

<?php

$logueo = true;
var_dump($logueo);

$numero = 300;
var_dump($numero);

$float = 3.55;
var_dump($float);

$nombre = dairon ;
var_dump($nombre);

$arrayEj = array('dairon', 'angela' , 'AndrésChiquito');
echo "<pre>";
var_dump($arrayEj);
echo "</pre>";
echo  $arrayEj[0];

?>


























</body>
</html>