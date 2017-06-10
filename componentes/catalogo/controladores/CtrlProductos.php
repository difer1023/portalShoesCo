<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../../persistencia/dao/ProductoDAO.php';
//include_once '../../persistencia/dto/coleccion.php';
include_once '../../persistencia/dao/ColeccionDAO.php';
//include_once '../../persistencia/dto/categoria.php';
include_once '../../persistencia/dao/CategoriaDAO.php';
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
