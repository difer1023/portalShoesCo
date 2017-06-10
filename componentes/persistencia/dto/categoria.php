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
class categoria {
    private $codigo;
    private $nombre;
    
    public function inicializar($codigo,$nombre){
        $this->codigo=$codigo;
        $this->nombre=$nombre;
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
