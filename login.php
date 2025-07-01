<?php
require("conexion.php");

$username = $_GET['usuario'];
$password = $_GET['pass'];
$sql = "select * from Persona where usuario='$username' and pass='$password'";
$res = mysqli_query($con,$sql);
$check = mysqli_fetch_array($res);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
mysqli_close($con);
?>