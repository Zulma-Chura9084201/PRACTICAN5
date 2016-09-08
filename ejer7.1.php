<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicio 7.1</title>
  <meta charset="utf-8" />
                                    
 </head>                                                                 
 <body>      
 
<?php
$n1 =$_GET['txtn1'];
$n2 =$_GET['txtn2'];
$n3 =$_GET['txtn3'];
 	$mayor =0;
 	$inter =0;
 	$menor =0;
	
if($n1>$n2 && $n1>$n3) {
	$mayor=$n1;
}else{
	if ($n2>$n1 && $n2>$n3) {
		$mayor=$n2;	
	}else{
		$mayor=$n3;
	}
}
if($n1<$n2 && $n1<$n3){
	$menor=$n1;
}else{
	if($n2<$n1 && $n2<$n3){
		$menor=$n2;
	}else{
		$menor=$n3;
	}
}
$inter=($n1+$n2+$n3)-($mayor+$menor);

?>

<?php

echo "Numero1: "."$n1"."<br>";
echo "Numero2: "."$n2"."<br>";
echo "Numero3: "."$n3"."<br><BR>";
echo "El numero mayor es: "."$mayor"."<br>";
echo "El numero intermedio  es: "."$inter"."<br>";
echo "El numero menor es: "."$menor"."<br>";
?>
 </body>                                                                 
 </html>