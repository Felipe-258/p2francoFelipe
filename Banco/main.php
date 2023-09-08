<?php     
    require_once("Persona.php");
    $javierParra = new Persona("Javier","Parra",0,25895415);
    $teoHildt = new Persona("Teo","hildt",15,123456789);

    require_once("CuentaBancaria.php");
    $cuentaJavierParra = new CuentaBancaria(001,$javierParra->nombre,15000);
    $cuentaTeoHildt = new CuentaBancaria(002,$teoHildt->nombre,5000);


    require_once("Banco.php");
    $banco0 = new Banco("Banco Santander","Perito Moreno 66",$listaDeCuentasSantander);
    echo 'Cuenta sin retiro: ' . $cuentaJavierParra->saldo . '<br />';
    echo 'Cuenta sin deposito: ' . $cuentaTeoHildt->saldo . '<br />';
    
    echo '<br/> depositando...<br/><br/>';
    
    //operaciones
    $cuentaTeoHildt->depositar(100); //deposito
    echo '<br/>';
    $cuentaJavierParra->retirar(2500); //retiro

    //$listaDeCuentasSantander[]=$cuentaJavierParra;
    //$listaDeCuentasSantander[]=$cuentaTeoHildt;
    $banco0->agregarCuenta($cuentaJavierParra);
    $banco0->agregarCuenta($cuentaTeoHildt);

    echo '<br />Cuenta con deposito: ' . $cuentaTeoHildt->saldo . '<br />';
    echo '<br />Cuenta con retiro: ' . $cuentaJavierParra->saldo . '<br />';
    
    $cuentaJavierParra->tranferir(2500,$cuentaJavierParra,$cuentaTeoHildt); //transferencia
    echo '<br/> **tranferencia de $2500**';
    echo '<br />Cuenta con transferencia(teo): ' . $cuentaTeoHildt->saldo;
    echo '<br />Cuenta con transferencia(javier): ' . $cuentaJavierParra->saldo . '<br /><br />';

    $banco0->buscarCuentaPorTitular("Javier","Parra");

    echo 'Nombre: ' . $javierParra->getNombre() . '<br />';
    echo 'Nombre: ' . $teoHildt->getNombre() . '<br />';
    echo"<br>";
    $teoHildt->setNombre('Lionel');
    echo 'Nombre nuevo: ' . $teoHildt->getNombre() . '<br />';
    echo"<br>";
    echo"<br>";
    var_dump($banco0);
    echo "<br>";
    echo"<br>";
    var_dump($javierParra);
    echo "<br>";
    //var_dump($cuentaJavierParra);
    echo"<br>";
    //var_dump($banco0);
    //manteniendo pulsado alt podes elegir mas de un renglon


    
?>