<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <div class="content">            
        <div class="menu container">
            <a href="menu.html" class="nombre"><img src="img/nombre.png"height="45px" alt=""></a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">              
            </nav>   
        </div>            
    </div>    

    <div class="logo">
        <img src="img/logo.png" alt="Imagen centrada" width="450" >
    </div>
   
</head>


<!--este codigo se realiza para permitir mantenernos en la vista del usuario logueado cuando se presione el boton hacia atras y no redirija al inicio de sesion--> 
<?php 
session_start();//para usar las variables sesiones
if(!empty($_SESSION['us_tipo'])){//si existe una session activa me envia directamente al login controller, para que esta se encargue de enrutarla
   header  ('Location: controlador/LoginController.php');
}
else{
session_destroy();// en caso de que no haya una sesion en curso deben borrarse
?>
<body> 
<body style="background-image: url('img/escritorio.png'); background-size: cover; background-repeat: no-repeat;"> 
    
        <div class="contenindo-login">
            <form action="controlador/LoginController.php" method="post">
           
                <h2>Formulario</h2>
                <br>
                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>NOMBRE</h5>
                        <input type="text" name="user" class="input" placeholder="Ingresa tu nombre">
                    </div>
                </div>
                <div class="input-div pass">
                <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>CONTRASEÑA</h5>
                        <input type="password" name="pass" class="input" placeholder="Ingresa tu contraseña">
                    </div>
                </div>
                <a href=""style="color: white;"></a>
                <input type="submit" class="btn" values="Iniciar Sesion">
            </form>

        </div>
    </div>
</body>
<script src="js/login.js"></script>
</html>
<?php
 }
?>