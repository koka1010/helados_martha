<?php

include ('../models/db.php');


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO `producto` VALUES('$id','$nombre','$cantidad','$precio')";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: producto.php");
}else{

}

?>