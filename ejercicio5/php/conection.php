<?php

	$conn = new mysqli('localhost', 'root', '', 'base1');

	if ($conn->connect_error) {
		header('Location: ..index.php?message_error=Error en la conexion');
		exit;
	}else{
		//echo 'Conexion exitosa';
	}

?>
