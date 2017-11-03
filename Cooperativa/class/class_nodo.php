<?php

	class Nodo{
        
        //Propiedades
		private $siguiente="root";

        //Constructor
		public function __construct($s){
			$this->$siguiente = $s;			
		}

        //Metodos
        public function setSiguiente($s){
            $this->siguiente=$s;
        }
        
        public function getSiguiente(){
            return $this->siguiente;
        }

	}
?>