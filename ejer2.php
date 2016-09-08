<!DOCTYPE html>
<html lang="es">
<head>
   <title>Ejercicio 2</title>
   <meta charset ="utf-8"/>
	
</head>
<body>
   <?php
     define(A, 10);
     echo "<table border=1>";
     $num=1;
     for ($num1=1; $num1<=A; $num1++)
     {
     	if ($num1 % 2 == 0)
echo "<tr bgcolor=yellow>";
else
echo "<tr>";
for ($num2=1; $num2<=A; $num2++)
{
echo "<td>", $num, "</td>";
$num=$num+1;
}
echo "</tr>";
}
echo "</table>";
     
   ?>
</body>
</html>
