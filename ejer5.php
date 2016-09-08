<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 5</title>
	<meta charset="utf-8" />
	
</head>

<body>

<?php

if ($gestor = opendir('imagen'))		
{
 echo "<table border=1>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor)))  
 {
 		if ($archivo!="." && $archivo!="..")
 		{

 			if ($i==4) 
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=imagen/$archivo><img src=imagen/$archivo width='200px'> 
			</a>";
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);
}
?>

</body>
</html>