<?php 
    include ('../models/db.php');

    $id=$_GET['id_producto'];

    $sql="SELECT * FROM `producto` WHERE id_producto='$id'";
    $query=mysqli_query($conex,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id_producto']?>">
                <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre']?>">
                <input type="text" name="cantidad" placeholder="cantidad" value="<?= $row['cantidad']?>">
                <input type="text" name="precio" placeholder="precio" value="<?= $row['precio']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>