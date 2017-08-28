<?php

include_once '../../persistencia/dao/ProductoDAO.php';

$filtros=$_POST['filtros'];
$objeto=  json_decode($filtros);

$productoDAO=new ProductoDAO();
$productos=$productoDAO->consultarFiltro($objeto);


echo json_encode($productos);

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