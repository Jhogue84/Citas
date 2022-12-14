<!DOCTYPE html>
<?php
//asignacion de variables
$numero1 = 12; //variable tipo entero
$numero2 = 5;
$cadenaTexto = "<br>Clase de lenguaje PHP";
$cadenaTexto2 = "Php dentro de html";

$resultado = 0;
?>
<!--midificacion jhonny-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css" />
        <title>Inicio de Sesion</title>
    </head>
    <body>
        <?php
        echo "<h3>PHP para las fichas 2374482 - 2393660</h3>"; //html dentro de php
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma de " . $numero1 . " + " . $numero2 . " = " . $resultado;
        echo "<br>Valor texto: " . $cadenaTexto;
        ?>
        <!--Php dentro de html-->
        <h4><?php echo $cadenaTexto2 ?></h4>
        <h5>Estructura de control IF</h5>
        <?php
        if ($numero1 > $numero2) {
            echo "El numero " . $numero1 . " es mayor a " . $numero2;
        } else {
            echo "El numero " . $numero1 . " es menor a " . $numero2;
        }
        ?>
        <h5>Estructura Ciclo FOR</h5>
        <p>Imprimir los numero del 1 al 10</p>
        <?php
        for ($i = 1; $i < 11; $i++) {
            // 1 = 1 2 
            echo "Iteracion : " . $i . "<br>";
        }
        ?>
    </body>
</html>

