<?php
include_once '../../Controllers/PacienteController.php';
include_once '/xampp/htdocs/Citas/Resources/templates/header.php';
$pacienteController = new PacienteController();
$arrayDatos = $pacienteController->listarPacientes();
//var_dump($arrayDatos);
?>

<div class="container">
    <h1>Lista de Pacientes</h1>
    <table border="2" class="table">
        <tr>
            <th>Identificacion</th><th>Nombres</th><th>Apellidos</th>
            <th>Fecha Nacimiento</th>
            <th>Sexo</th>
            <th>Usuario</th>
            <th><a href="#" class="btn btn-success">Adicionar</a>
            </th>
        </tr>
        <?php
        //datos de la consulta
        /*
          echo "<pre>";
          var_dump($arrayDatos);
          echo "</pre>";
         */
        if ($arrayDatos == null) {
            echo '<tr>';
            echo "<td colspan='2'>NO existen registros</td>";
            echo '</tr>';
        }

        //PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, 
        //PacSexo, PacUsuario, PacClave
        foreach ($arrayDatos as $key => $value) {
            echo '<tr>';
            echo "<td>{$arrayDatos[$key]['PacIdentificacion']}</td>";
            echo "<td>{$arrayDatos[$key]['PacNombres']}</td>";
            echo "<td>{$arrayDatos[$key]['PacApellidos']}</td>";
            echo "<td>{$arrayDatos[$key]['PacFechaNacimiento']}</td>";
            echo "<td>{$arrayDatos[$key]['PacSexo']}</td>";
            echo "<td>{$arrayDatos[$key]['PacUsuario']}</td>";
            echo '<td><a href="#" class="btn btn-warning">Editar</a></td>';
            echo "<td><a href='#' class='btn btn-danger'>Eliminar</a></td>";
            echo '</tr>';
        }
        ?>
    </table>
</div>
<?php include_once '/xampp/htdocs/Citas/Resources/templates/footer.php'; ?>