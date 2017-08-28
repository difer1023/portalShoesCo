<?php

include_once '../../persistencia/dao/CategoriaDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$operacion=$_POST['operacion'];

if($operacion=='consultarTodos'){
$categoriaDAO = new CategoriaDAO();
$categorias = $categoriaDAO->consultarTodos();
echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
}
if($operacion=='nuevo'){
    $categoriaDAO = new CategoriaDAO();
    $categoriaDAO->insertar($_POST['nombre']);
}

if($operacion=='eliminar'){
    $categoriaDAO = new CategoriaDAO();
    $categoriaDAO->eliminar($_POST['codigo']);
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