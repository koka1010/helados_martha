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
            </ul>
        </nav>
    </header>
    <div class="login-register">
        <div class="form-container">
            <img src="../assets/img/fd1499_f0ba6f78fcb14198b9644031dd6d7ac5~mv2.png" alt="logo" class="logo-login">
            <form action="../controllers/UsuarioControlador.php" class="form" method="POST">
                <label for="nombre" class="label">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Simon" class="input" required>

                <label for="apellido" class="label">Apellido</label>
                <input type="text" id="last-name" name="last-name" placeholder="Mazo Londoño" class="input" required>

                <label for="email" class="label">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="correo@prueba.com" class="input" required>

                <label for="contraseña" class="label">Contraseña</label>
                <input type="password" id="new-password" name="new-password" placeholder="*******" class="input" required>
                <input class="primary-button" type="submit" name="register">

            </form>

        </div>
    </div>
</body>

</html>