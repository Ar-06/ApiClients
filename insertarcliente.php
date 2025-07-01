<?php
require("conexion.php");
//LOCAL
// $con = new mysqli('localhost', 'root', '', 'android');

//EXTERNO
$con = new mysqli('sql308.byethost16.com', 'b16_39371099', 'Fagami0609', 'b16_39371099_android');
if ($con->connect_errno) {
echo 'Error al conectar base de datos: ', $con->connect_error;
exit();
}
$nombre = htmlspecialchars($_GET['nombre']);
$apellido = htmlspecialchars($_GET['apellido']);
$direccion = htmlspecialchars($_GET['direccion']);
$telefono = htmlspecialchars($_GET['telefono']);
$sexo = $_GET['sexo'];
$sql = $con->prepare('INSERT INTO Persona ( nombre, apellidos, sexo, celular, domicilio) VALUES
(?, ?, ?,?,?)');
$sql->bind_param('ssiss', $nombre, $apellido,$sexo, $telefono,$direccion);
$sql->execute();
echo 'OK\n';
;
$con->close();
?>