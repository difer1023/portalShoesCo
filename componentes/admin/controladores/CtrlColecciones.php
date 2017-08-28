<?php
header("Content-Type: text/html;charset=utf-8");
include_once '../../persistencia/dao/ColeccionDAO.php';

$operacion=$_POST['operacion'];

if($operacion=='consultarTodos'){
$coleccionDAO=new ColeccionDAO();
$colecciones=$coleccionDAO->consultarTodos();
echo json_encode($colecciones,JSON_UNESCAPED_UNICODE);
}
if($operacion=='nuevo'){
    $coleccionDAO=new ColeccionDAO();
    $coleccionDAO->insertar($_POST['nombre']);
}

if($operacion=='eliminar'){
    $coleccionDAO=new ColeccionDAO();
    $coleccionDAO->eliminar($_POST['codigo']);
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
