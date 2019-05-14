<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'clase6');

	if($conn->connect_error){

		echo 'Exitió un error en la conexion'.$conn->connect_error;
		header('Location: ../index.php?error_message=Ocurrió un error'.$conn->connect_error);
		exit;
	}

	/*if($_SERVER['SCRIPT_NAME'] == '/Ambientes/clase06/ejer01/index.php' && isset($_SESSION['user']) ){
		header('Location: inicio.php');
		exit;
	}

	if ($_SERVER['SCRIPT_NAME'] == '/Ambientes/clase06/ejer01/inicio.php' && !isset($_SESSION['user'])) {
		header('Location: index.php');
		exit;
	}*/
?>