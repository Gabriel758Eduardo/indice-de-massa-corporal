<?php
	$peso = $_POST["peso"];
	$altura = $_POST["altura"];
	
	$resultado = $peso / ($altura * $altura);
	
	echo "Resultado eh: $resultado";
?>