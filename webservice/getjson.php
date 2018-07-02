<?php
/// Obtenemos el json enviado
$data = file_get_contents('php://input');
// Los convertimos en un array
$datos = json_decode( $data, true );
print_r($adatos);
