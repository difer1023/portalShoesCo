<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'conexion.php';
include_once '../../persistencia/dto/coleccion.php';
/**
 * Description of ColeccionDAO
 *
 * @author Difer
 */
class ColeccionDAO {
    
    private $conexion=null;

    function __construct() {
        $this->conexion = new conexion();
        mysql_query("SET NAMES 'utf8'");
    }

    public function consultarTodos() {
        $consulta = "select * from coleccion";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
        }
        $colecciones=array();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $colecciones [] = $row;
        }

        mysql_close($this->conexion->getLink());
        return $colecciones;
    }
    
    public function insertar($nombre) {
        $consulta = "insert into coleccion(c_nombre) values('".$nombre."')";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al insertar el registro: ' . mysql_error().$consulta);
        }
        mysql_close($this->conexion->getLink());
    }
    
    public function eliminar($codigo) {
        $consulta = "delete from producto where i_coleccion='".$codigo."'";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al elminar el registro: ' . mysql_error().$consulta);
        }else{
        $consulta = "delete from coleccion where i_codigo='".$codigo."'";
        $result1 = mysql_query($consulta, $this->conexion->getLink());
        if (!$result1) {
            die('Ocurrio un error al eliminar el registro: ' . mysql_error().$consulta);
        }
        }
        mysql_close($this->conexion->getLink());
    }
    //put your code here
}
