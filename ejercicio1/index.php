<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/
include('php/conection.php');
include('php/session_issetuser.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<h2>Login</h2>
	<form action="php/process_login.php" method="POST">
		<input type="text" name="username" placeholder="Usuario">
		<input type="password" name="password" placeholder="Password">
		<button>Ingresar!</button>
	</form>
</body>
</html>