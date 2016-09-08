<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 6</title>
	<meta charset="utf-8" />

</head>

<body>

	<h2>Bucle foreach</h2>
<p>Recorremos el arreglo</p>

<?php
$pelicula[0] = "Civil War";
$pelicula[1] = "Fast Furious";
$pelicula[2] = "Thor";
$pelicula[3] = "Roqui";
$pelicula[4] = "La Gerra de las galaxias";
$pelicula[5] = "The Avenger";

foreach($pelicula as $valor) {   
echo 'PELICULA: '. $valor.'<br/>';  
}
?>
</body>
</html>