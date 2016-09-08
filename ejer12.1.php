<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />

</head>

<body>
<form method="post" action="ejer12.1.php">  
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

<?php

$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php

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