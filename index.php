<?php
    $sms = isset($_GET["sms"]);
    $mensaje="";
    if($sms == 1) $mensaje="Usuario y/o contraseña son incorrectos.";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="Resources/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mb-3 col-4" >
            <h1>Sistema de informacion de Citas</h1>
            <h2>Inicio de Sesion</h2>
            <?php echo $mensaje;?>
            <form method="POST" action="Controllers/PacienteController.php">
                <!--PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, 
                PacSexo, PacUsuario, PacClave-->
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>    
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
                <input type="submit" value="Iniciar Sesion" name="accion">
                <a href="crearCuenta.php" >Registrase</a>
            </form>
            <a href="Views/Pacientes/lista.php">Listar Pacientes</a>
        </div>
    </body>
</html>
