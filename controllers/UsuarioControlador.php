<?php
include ('../models/db.php');

if(isset($_POST['register'])) {
    $name=$_POST['name'];
    $last_name=$_POST['last-name'];
    $email=$_POST['email'];
    $password=$_POST['new-password'];
    $consulta=" INSERT INTO register (name, last_name, email, password ) VALUES ('$name','$last_name','$email','$password')";
    $resultado=mysqli_query($conex,$consulta);
}

?>
