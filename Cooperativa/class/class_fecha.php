<?php
include_once('class_nodo.php');

class Fecha extends Nodo{
    //Propiedades
    private $dia;
    private $mes;
    private $año;
    
    //Constructor
    public function __contruct($d,$m,$a,$siguiente){
         parent::__contruct($siguiente);
         setDia($d);setMes($m);setAño($a);
    }
    
    //Metodos
    public function ObtenerFecha(){
        return $dia.$mes.$año;
    }
    
    //Metodos Set/Get
    public function setDia($d){
        $this->dia=s;
    }
    public function getDia(){
        return $this->dia;
    }
    
    public function setDia($d){
        $this->dia=s;
    }
    public function getMes(){
        return $this->mes;
    }
    
    public function setDia($d){
        $this->dia=s;
    }
    public function getAño(){
        return $this->año;
    }
}

?>