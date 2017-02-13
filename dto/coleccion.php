<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categoria
 *
 * @author Difer
 */
class coleccion {
    private $codigo;
    private $nombre;
    private $fechaCreacion;
    
    public function inicializar($codigo,$nombre,$fechaCreacion){
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->fechaCreacion=$fechaCreacion;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

        //put your code here
}
