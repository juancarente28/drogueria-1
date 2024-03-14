<?php
session_start();
if($_SESSION['us_tipo']==2){// se realiza este if para verificar que el usuario logueado tiene rol de administrador
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico</title>
</head>
<body>
    <h1>Bienvenido Tecnico</h1>
    <a href="../controlador/Logout.php">Cerrar sesion</a>
</body>
</html>

<?php
} // se utilza entre codigo php para poder usar la llave y que afecte al codigo Html el if
else{
    header('Location: ../vista/login.php');
}
?>