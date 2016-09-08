<?php

$usuario=ZULMA;
$pass=9084201;

$u=$_POST['usr'];
$p=$_POST['pwd'];

if($usuario ==$u && $pass ==$p)

	{
			
			header("location:ejer10.2.php");
	
	}
	else
	{
		
			header("location:ejer10.php");	
    }
?>
