<?php

require('ValidarIdentificacion.php');

// Crear nuevo objecto
$validador = new ValidarIdentificacion();

$tipoDoc = $_GET['doc'];

$docNum = $_GET['num'];

if ($tipoDoc=='1'){
    if ($validador->validarCedula($docNum)) {
    echo "Valida";    
    return true;
    } else {
        echo "Invalida";
        return false;
    }
}

if ($tipoDoc=='3'){
    if ($validador->validarRucPersonaNatural($docNum) || $validador->validarRucSociedadPrivada($docNum) || $validador->validarRucSociedadPublica($docNum)) {
        echo "Valido";
    return true;
    } else {
        echo "Invalido";
        return false;
    }
}



?>