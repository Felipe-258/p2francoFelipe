<?php 
class CuentaBancaria extends Persona{
    public $numeroDeCuenta;
    public $titular; #instacia clase persona
    public $saldo;
    const sobregiro = 1000;


    public function depositar($cantidad){
        $this->saldo = $this->saldo + $cantidad;
        echo "Operacion Exitosa";
        #$this -> para hacer referencia a una variable de la clase
    }

    public function retirar($cantidad){
        
        if ($cantidad < $this->saldo) {
            $this->saldo = $this->saldo - $cantidad;
            echo "Operacion Exitosa";
        }else{
            echo "saldo insuficiente";
        
        }        
    }

    public function tranferir($monto, $cuentaOrigen, $cuentaDestino){
        if ($monto < $cuentaOrigen->saldo) {
            $cuentaDestino->saldo = $cuentaDestino->saldo + $monto;
            $cuentaOrigen->saldo = $cuentaOrigen->saldo - $monto;
        }
    }

    #construct
    public function __construct($numeroDeCuenta, $titular, $saldo) {
        $this -> numeroDeCuenta = $numeroDeCuenta;
        $this -> titular = $titular;
        $this -> saldo = $saldo;
    }

}



?>