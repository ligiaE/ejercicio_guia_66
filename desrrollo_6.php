<?php
	   	    if (isset($_POST['numero'])){

$cadena = $_POST['numero'];
//$invertido = strrev($cadena);

if (strrev($cadena) == $cadena)
{
	echo "El número es Capicuo";
} else
{
	echo "El número no es Capicuo";
}
			}
?>
