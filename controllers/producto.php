<?php

include ('../models/db.php');
$sql= "SELECT * FROM `producto`";
$query=mysqli_query($conex,$sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/style2.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>PRODUCTOS</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="id" placeholder="id_producto">
            <input type="text" name="nombre" placeholder="nombre">
            <input type="text" name="cantidad" placeholder="cantidad">
            <input type="text" name="precio" placeholder="precio">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>PRODUCTOS REGISTRADOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_producto'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <th><?= $row['precio'] ?></th>
                        <th><a href="update.php?id=<?= $row['id_producto'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id_producto'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>