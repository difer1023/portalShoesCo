<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producto
 *
 * @author Difer
 */
class producto {
    
    private $codigo;
    private $nombre;
    private $descripcion;
    private $fechaCreacion;
    private $descontinuado;
    private $coleccion;
    private $tipoProducto;
    private $rutaImagen;
    
    public function inicializar($codigo,$nombre,$descripcion,$fechaCreacion,$descontinuado,$coleccion,$tipoProducto,$rutaImagen){
        $this->codigo=$codigo;
        $this->coleccion=$coleccion;
        $this->descontinuado=$descontinuado;
        $this->descripcion=$descripcion;
        $this->fechaCreacion=$fechaCreacion;
        $this->nombre=$nombre;
        $this->rutaImagen=$rutaImagen;
        $this->tipoProducto=$tipoProducto;
    }
    //put your code here
    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function getDescontinuado() {
        return $this->descontinuado;
    }

    function getColeccion() {
        return $this->coleccion;
    }

    function getTipoProducto() {
        return $this->tipoProducto;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    function setDescontinuado($descontinuado) {
        $this->descontinuado = $descontinuado;
    }

    function setColeccion($coleccion) {
        $this->coleccion = $coleccion;
    }

    function setTipoProducto($tipoProducto) {
        $this->tipoProducto = $tipoProducto;
    }

    function getRutaImagen() {
        return $this->rutaImagen;
    }

    function setRutaImagen($rutaImagen) {
        $this->rutaImagen = $rutaImagen;
    }


}
