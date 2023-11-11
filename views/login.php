<?php
session_start();
if(isset($_SESSION["login"])){
    echo "Binvenido ".$_SESSION["login"];

}else{
    echo "sin sesion";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <title>Formulario</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="../index.php"><img class="logo-img" src="assets/img/fd1499_f0ba6f78fcb14198b9644031dd6d7ac5~mv2.png"
                    alt="" /></a>
        </div>
        <input type="checkbox" id="toggle">
        <label for="toggle">
            <svg class="menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </label>

        <nav class="navigation">
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="register.php">Registrarse</a></li>
            </ul>
        </nav>
    </header>
    <div class="login">
        <div class="form-container">
            <img src="../assets/img/fd1499_f0ba6f78fcb14198b9644031dd6d7ac5~mv2.png" alt="logo" class="logo-login">
            <form action="../controllers/producto.php" class="form" method="POST">
                <label for="email" class="label">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="correo@prueba.com" class="input" required>

                <label for="new-password" class="label">Contraseña</label>
                <input type="password" id="new-password" name="new-password" placeholder="*******" class="input" required>

                <a href="">Olvide mi contraseña</a>
                <button class="primary-button ">Ingresar</button>
            </form>
        </div>
    </div>
</body>

</html>