<?php 
    class Persona{
        public $nombre;
        public $apellido;
        public $edad;
        public $dni;
        
        #getter de nombre
        public function getNombre(){
            return $this->nombre;
        }
        #setter
        public function setNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        #construct
        public function __construct($nombre, $apellido, $edad, $dni) {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            if ($edad == 0){
                $this -> edad = 18;
            }else {
                $this -> edad = $edad;
            }
            $this -> dni = $dni;
        }
    }

?>