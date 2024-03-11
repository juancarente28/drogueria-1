<?php // Se crean Variables para el inicio de sesion
session_start();
$user = $_POST['user'];//echo $user; echo " ";
$pass = $_POST['pass'];//echo $pass; con estos Echo mostramos en pantalla a modo de prueba de que se almacenan las variables
// luego debemos verificar que los datos ingresados en el formulario estan en nuestra BD
?>
