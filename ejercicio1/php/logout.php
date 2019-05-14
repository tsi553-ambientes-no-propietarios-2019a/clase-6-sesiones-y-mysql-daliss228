<?php 
include('../php/conection.php');
session_destroy();

header('Location: ../index.php');
exit;
?>