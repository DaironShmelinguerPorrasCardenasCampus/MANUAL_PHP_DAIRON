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
echo "ESTE ES UN EJEMPLO DE ARRAY EN PHP";
$cars = array("VOLVO", "BMW", "TOYOTA"); 
echo "<br><br>";
echo "ME GUSRAN LOS CARROS DE MARCA " . $cars[0] . ", " . $cars[1] . " Y " . $cars[2] . ".";
echo "<br><br>";
echo "HAY ". count($cars) . " MARCAS EN EL ARREGLO";


echo "<br><br>";
echo "ESTE ES UN EJEMPLO PARA RECORRER UN ARRAY EN PHP CON CICLO FOR";
echo "<br><br>";
$campers = array("Dairon", "Angela", "Andrés");
$contar = count($campers);

for($i = 0; $i < $contar; $i++) {
  echo $campers[$i];
  echo "<br>";
}

echo "<br><br>";
echo "ESTE ES UN EJEMPLO PARA RECORRER UN ARRAY ASOCIATIVO EN PHP CON CICLO FOREACH";
echo "<br><br>";

$edad = array(
    "Dairon" => "20",
    "Angela" => "25",
    "Diego"  => "30"
);

foreach ($edad as $key => $value) {
    echo "Nombre : " .$key. " y" ." Edad: " . $value . " años";
    echo "<br>";
}
?>

</body>
</html>