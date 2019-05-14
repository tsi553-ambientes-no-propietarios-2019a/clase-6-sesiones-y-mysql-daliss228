<?php

//$conn = new mysqli('locahost', 'root', '', 'bddquejas');

/*if ($conn->connect_error) {
	header('Location: ../pagina1.php?error_message=Error en la conexion'.$conn->connect_error);
	exit;
}*/

$conn = new mysqli('localhost', 'root', '', 'bddquejas');

	if($conn->connect_error){
		header('Location: ../pagina1.php?error_message=Ocurrió un error'.$conn->connect_error);
		exit;
	}

?>