<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
	die();
}

include 'conexion.php';

$query="select codCiudad,ciudad from ciudad where codCanton = ".$_REQUEST["canton"];

$conexion = connectDB();
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if(!$result = mysqli_query($conexion, $query)) die(); //si la conexión cancelar programa

$ciudades = array();
while($row = mysqli_fetch_array($result)) {
    $ciudades[$row['codCiudad']] = $row['ciudad'];
}

disconnectDB($conexion); //desconectamos la base de datos

print_r(json_encode($ciudades));

?>
