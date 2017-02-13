<?php include 'conexion.php'; ?>

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductoDAO
 *
 * @author Difer
 */
class ProductoDAO {

    private $conexion=null;

    function __construct() {
        $this->conexion = new conexion();
    }

    public function consultarTodos() {
        $consulta = "select * from producto;";
        $result = mysql_query($consulta, $this->conexion->getLink());
        if (!$result) {
            die('Ocurrio un error al obtener los valores de la base de datos: ' . mysql_error());
        }
        $productos=array();
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $producto=new producto();
            $producto->setCodigo($row['i_codigo']);
            $producto->setNombre($row['c_nombre']);
            $producto->setDescripcion($row['c_descripcion']);
            $producto->setRutaImagen($row['c_ruta_imagen']);
            $productos []= $producto;
        }
        echo "</table></center>";
        mysql_close($this->conexion->getLink());
        return $productos;
    }

    //put your code here
}
