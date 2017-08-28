<?php

include_once '../../persistencia/dao/ProductoDAO.php';



$operacion=$_POST['operacion'];

$producto=$_POST['producto'];
$objeto=  json_decode($producto);

if($operacion=='insertar'){
$productoDAO=new ProductoDAO();
$productos=$productoDAO->insertar($objeto);
}

if($operacion=='modificar'){
$productoDAO=new ProductoDAO();
$productos=$productoDAO->modificar($objeto);
}

if($operacion=='eliminar'){
$productoDAO=new ProductoDAO();
$productos=$productoDAO->eliminar($objeto);
}

switch (json_last_error()) {
        
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
        break;
       
    }