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


























</body>
</html>