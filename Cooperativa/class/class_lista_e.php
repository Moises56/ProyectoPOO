<?php
include_once('class_fecha.php');
	class Lista{
        //Propiedades
		private $inicio;

        //Constructor
		public function __construct(){
			$this->inicio=null;			
		}
        
        //Metodos
        public function Meter($nuevoNodo){
            $nuevoNodo->setSiguiente($this.inicio);
            $this.inicio=$nuevoNodo;
        }
        
        public function Sacar($nodo){
            $aux=$this->inicio;
            $ant;
            while($aux!=null){
                if($aux==$nodo){
                    if($aux==$this->inicio){
                        $this->inicio=$aux->getSiguiente();
                    }else{
                        $ant->setSiguiente($aux->getSiguiente());
                    }
                    break;
                }else{
                    $ant=$aux;
                    $aux=$aux->getSiguiente();
                }
            }
        }
        
        public function isVacia(){
            return ($this->inicio==null);
        }
        
        public function Vaciar(){
            $this->inicio=null;
        }
        
        
        //Metodos Set/Get
        public function setInicio($i){
            $this->inicio=$i;
        }
        public function getInicio(){
            return $this->inicio;
        }
	
	}
?>