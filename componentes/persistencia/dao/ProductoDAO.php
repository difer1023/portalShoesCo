<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'conexion.php';
include_once '../../persistencia/dto/producto.php';
/**
 * Description of ProductoDAO
 *
 * @author Difer
 */
class ProductoDAO {

    private $conexion = null;

    function __construct() {
        $this->conexion = new conexion();
    }

    public function consultarTodos() {
        $consulta = "select * from producto;";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
        }
        $productos = array();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $producto = new producto();
            $producto->setCodigo($row['i_codigo']);
            $producto->setNombre($row['c_nombre']);
            $producto->setDescripcion($row['c_descripcion']);
            $producto->setRutaImagen($row['c_ruta_imagen']);
            print_r($producto->getCodigo());
            $productos [] = $producto;
        }
        mysql_close($this->conexion->getLink());
        return $productos;
    }

    public function consultarFiltro($array) {
        $sentencia = "select * from producto ";

        $tiposProductos;
        $coleccionesProductos;

        if (property_exists($array, "tipo") || property_exists($array, "coleccion")) {
            $sentencia.=" where ";
        }

        if (property_exists($array, "tipo")) {
            $tiposProductos = $array->tipo;
            if (count($tiposProductos) > 0) {
                $sentencia.="i_tipo in(";
                for ($i = 0; $i < count($tiposProductos); $i++) {

                    if ($i > 0 && $i < count($tiposProductos)) {
                        $sentencia.=",";
                    }
                    $sentencia.=$tiposProductos[$i];
                }
                $sentencia.=")";
            }
        }

        if (property_exists($array, "coleccion")) {
            $coleccionesProductos = $array->coleccion;
            if (count($coleccionesProductos) > 0) {
                if (property_exists($array, "tipo")) {
                    $sentencia.=" and ";
                }
                $sentencia.=" i_coleccion in(";
                for ($i = 0; $i < count($coleccionesProductos); $i++) {

                    if ($i > 0 && $i < count($coleccionesProductos)) {
                        $sentencia.=",";
                    }
                    $sentencia.=$coleccionesProductos[$i];
                }
                $sentencia.=")";
            }
        }

        $result = mysql_query($sentencia, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
        }
        $productos = array();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            
            $productos [] = $row;
        }

        mysql_close($this->conexion->getLink());
        return $productos;
    }

    //put your code here
}
