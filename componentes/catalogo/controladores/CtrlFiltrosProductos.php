<?php

include_once '../../persistencia/dao/ProductoDAO.php';

$filtros=$_POST['filtros'];
$array=  json_decode($filtros);

$productoDAO=new ProductoDAO();
$productos=$productoDAO->consultarFiltro($array);


echo json_encode($productos);
