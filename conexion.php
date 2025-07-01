<?php 

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
if (!$con) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    exit;
} else {
    echo "Conexion exitosa";
}
?>