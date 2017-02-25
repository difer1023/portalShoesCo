<?php

include_once '../dao/ProductoDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$filtros=$_POST['filtros'];
$array=  json_decode($filtros);

$productoDAO=new ProductoDAO();
$productos=$productoDAO->consultarFiltro($array);

echo json_encode($productos);
