<?php include '../portalShoesCo/dto/producto.php'; ?>
<?php include '../portalShoesCo/dao/ProductoDAO.php'; ?>
<?php include '../portalShoesCo/dto/coleccion.php'; ?>
<?php include '../portalShoesCo/dao/ColeccionDAO.php'; ?>
<?php include '../portalShoesCo/dto/categoria.php'; ?>
<?php include '../portalShoesCo/dao/CategoriaDAO.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CtrlProductos
 *
 * @author Difer
 */
class CtrlProductos {
    private $productoDAO;
    private $coleccionDAO;
    private $categoriaDAO;
    
    public function obtenerProductos(){
        $this->productoDAO=new ProductoDAO();
        $productos=$this->productoDAO->consultarTodos();
        return $productos;
    }
    
    public function obtenerColecciones(){
        $this->coleccionDAO=new ColeccionDAO();
        $colecciones=$this->coleccionDAO->consultarTodos();
        return $colecciones;
    }
    
    public function obtenerCategorias(){
        $this->categoriaDAO=new CategoriaDAO();
        $categorias=$this->categoriaDAO->consultarTodos();
        return $categorias;
    }
    //put your code here
}
