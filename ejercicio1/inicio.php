<?php
include('php/conection.php'); 
include('php/session_issetuser.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Inicio</h1>
	<p>Bienvenido <?php echo $_SESSION['user']['username']; ?></p><br>
	<a href="php/logout.php">Cerrar sesion</a>
</body>
</html>