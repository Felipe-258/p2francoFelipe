<?php 
    class Banco{
        public $nombre;
        public $direccion;
        public $listaDeCuentas= [];
        
        public function __construct($nombre, $direccion, $listaDeCuentas) {
            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
            $this -> listaDeCuentas = $listaDeCuentas;
        }
        public function agregarCuenta($cuenta){
            echo '<br><br><br>';
            var_dump($cuenta);
            echo '<br><br><br>';
            var_dump($this->listaDeCuentas);
            //array_push($this->listaDeCuentas, $cuenta);
            $this->listaDeCuentas[]=$cuenta;
            
        }
        

        public function buscarCuentaPorTitular($nombre,$apellido){
            #devuelve la cuenta bancaria asociada
            
            foreach ($this->listaDeCuentas as $cuenta) {
                var_dump($cuenta);
                
                /*if ($cuenta->titular->nombre == $nombre){
                    var_dump($cuenta);
                }
            */}
        }

        #construct
        
    }


?>