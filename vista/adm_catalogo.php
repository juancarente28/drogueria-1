<?php
session_star();
if($_SESSION['us_tipo']==1){// se realiza este if para verificar que el usuario logueado tiene rol de administrador
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Bienvenido Administrador</h1>
    <a href="../controlador/Logout.php">Cerrar sesion</a>
</body>
</html>

<?php
} // se utilza entre codigo php para poder usar la llave y que afecte al codigo Html el if
else{
    header('Location: ../vista/login.php');
}
?>