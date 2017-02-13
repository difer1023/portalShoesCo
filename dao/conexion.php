<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author Difer
 */
class conexion {
private $servername = "localhost";
private $username = "root";
private $password = "";
private $link;

    function __construct(){
    $this->link = mysql_connect($this->servername,$this->username,$this->password);
    mysql_select_db("ShoesCo", $this->link);
    }

    function getLink() {
        return $this->link;
    }
        //put your code here
}
