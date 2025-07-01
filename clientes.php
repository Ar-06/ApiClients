<?php
require("conexion.php");

//SERVIDOR EXTERNO
define('HOST','sql308.byethost16.com');
define('USER','	b16_39371099');
define('PASS','Fagami0609');
define('DB','b16_39371099_android');


//SERVIDOR LOCAL
// define('HOST','127.0.0.1');
// define('USER','root');
// define('PASS','');
// define('DB','android');

$con = mysqli_connect(HOST,USER,PASS,DB);


$sql = "SELECT cod_persona, nombre, apellidos FROM Persona ORDER BY nombre DESC ";
$res = mysqli_query($con,$sql);
$jsonData = array();
while ($array = mysqli_fetch_array($res)) {
$row_array['Cod_persona'] = $array['cod_persona'];
$row_array['Nombre'] = $array['nombre'];
$row_array['Apellidos'] = $array['apellidos'];
array_push($jsonData,$row_array);
}
echo json_encode($jsonData);
mysqli_close($con);
?>