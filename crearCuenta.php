<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="Resources/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mb-3 col-4" >
            <h1>Sistema de informacion de Citas</h1>
            <h2>Crear Cuenta</h2>
            <form method="post" action="Controllers/PacienteController.php">
                <!--PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, 
                PacSexo, PacUsuario, PacClave-->
                <div class="mb-3">
                    <label for="pacIdentificacion" class="form-label">Identificacion</label>
                    <input type="text" class="form-control" id="pacIdentificacion" name="pacIdentificacion" required>
                </div>
                <div class="mb-3">
                    <label for="pacNombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="pacNombres" name="pacNombres" required>
                </div>
                <div class="mb-3">
                    <label for="pacApellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="pacApellidos" name="pacApellidos" required>
                </div>
                <div class="mb-3">
                    <label for="pacFechaNacimiento" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="pacFechaNacimiento" name="pacFechaNacimiento" required>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pacSexo" id="rdbFemenino" value="F" checked>
                        <label class="form-check-label" for="rdbFemenino">
                            Femenino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pacSexo" value="M" id="rdbMasculino">
                        <label class="form-check-label" for="rdbMasculino">
                            Masculino
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="pacUsuario" required>
                </div>    
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="clave" name="pacClave" required>
                </div>
                <input type="submit" value="Registrar" name="accion" />
                <a href="index.php" >Cancelar</a>
            </form>
        </div>
    </body>
</html>
