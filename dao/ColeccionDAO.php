<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColeccionDAO
 *
 * @author Difer
 */
class ColeccionDAO {
    
    private $conexion=null;

    function __construct() {
        $this->conexion = new conexion();
    }

    public function consultarTodos() {
        $consulta = "select * from coleccion;";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
        }
        $colecciones=array();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $coleccion=new coleccion();
            $coleccion->setCodigo($row['i_codigo']);
            $coleccion->setNombre($row['c_nombre']);
            
            $colecciones []= $coleccion;
        }
        echo "</table></center>";
        mysql_close($this->conexion->getLink());
        return $colecciones;
    }
    //put your code here
}
