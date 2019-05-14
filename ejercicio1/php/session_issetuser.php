<?php

	if($_SERVER['SCRIPT_NAME'] == '/Ambientes/clase06/ejer01/index.php' && isset($_SESSION['user']) ){
		header('Location: inicio.php');
		exit;
	}

	if ($_SERVER['SCRIPT_NAME'] == '/Ambientes/clase06/ejer01/inicio.php' && !isset($_SESSION['user'])) {
		header('Location: index.php');
		exit;
	}

?>