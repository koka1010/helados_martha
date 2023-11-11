<?php

include ('../models/db.php');

$id = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql="UPDATE producto SET  nombre='$nombre', cantidad='$cantidad', precio='$precio' WHERE id_producto='$id'";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: producto.php");
}else{

}

?>