<?php
header('content-type: image/jpeg');
$directorio = $_GET["dir"];
/*	header('content-type: image/jpeg');
	$dir='imagenes/';  //nombre de la carpeta
	$imagen = $_GET["src"];   
	echo $imagen; 

echo 'Nic/'.$imagen;
$imagenes = new Imagick('imagenes/'.$imagen);
echo $imagenes;
random_int(100, 999);count($a);
*/

$ficheros  = array_slice(scandir($directorio), 2);  
$i = random_int(0, count($ficheros)-1);
$imagenes = new Imagick($directorio.'/'.$ficheros[$i]);
echo $imagenes;


?>
