<?php

include ('../models/db.php');

$id=$_GET["id_producto"];

$sql="DELETE FROM `producto` WHERE id_producto='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: producto.php");
}else{

}

?>