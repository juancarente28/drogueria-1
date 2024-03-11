<?php // Se crean Variables para el inicio de sesion
 include_once '../modelo/Usuario.php';// con esto llamamos a usuario
session_start();
$user = $_POST['user'];//echo $user; echo " ";
$pass = $_POST['pass'];//echo $pass; con estos Echo mostramos en pantalla a modo de prueba de que se almacenan las variables
// luego debemos verificar que los datos ingresados en el formulario estan en nuestra BD
$usuario = new Usuario();// instanciamos para que se nos haga la conexion
$usuario->Loguearse($user,$pass);// usamos el metodo loguearse, correspondienta POO y pasarle las funciones para que retorne un objeto
foreach($usuario->objetos as $objeto){
    print_r($objeto);

}
?>
