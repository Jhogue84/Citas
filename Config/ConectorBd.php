<?php

class ConectorBd {

    //propiedades - atributos
    private $servidor;
    private $usuario;
    private $clave;
    private $bd;
    //private $puerto;//cuando se cambie de puerto
    private $conexion;
    
    public static function conectar() {
        $servidor= "localhost";
        $usuario= "root";
        $clave = "";
        $bd= "citassena2";
        
        $conexion = new mysqli($servidor, $usuario, $clave, $bd);
        if ($conexion->connect_errno) {
            echo "No  se pudo realizar la conexion".$conexion->connect_error;
        } 
        //else echo "Se realizo la conexion exitosamente.";
        return $conexion;
    }

    //la ejecucion de las consultas
    public static function consultaRetorno($cadenaSql) {
        //retorno valores
        $con = ConectorBd::conectar();
        $objDatos = $con->query($cadenaSql);
        return $objDatos;
    }

    public static function consultaSimple($cadenaSql) {
        //retorno valores
        $con = ConectorBd::conectar();
        $con->query($cadenaSql);
    }

}
?>

