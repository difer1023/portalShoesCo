<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'conexion.php';
include_once '../../persistencia/dto/categoria.php';
/**
 * Description of CategoriaDAO
 *
 * @author Difer
 */
class CategoriaDAO {
    
    private $conexion=null;

    function __construct() {
        $this->conexion = new conexion();
        mysql_query("SET NAMES 'utf8'");
    }

    public function consultarTodos() {
        $consulta = "select * from categoria";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
        }
        $categorias=array();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $categorias [] = $row;
        }
        mysql_close($this->conexion->getLink());
        return $categorias;
    }
    //put your code here
}
