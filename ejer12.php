<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicio 12</title>
  <meta charset="utf-8" />

</head>

<body>
<h1>Lanzamiemto de los DADOS</h1>
<form method="post" action="ejer12.php">  
<?php

$total = "6"; 
$extension = ".jpg";
$carpeta = "imgdado";

$start = "1";
$random = mt_rand($start, $total);

$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>

<?php

$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>
<input type="submit" value="lanzar dados">

</form> 
</body>
</html>