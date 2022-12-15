<?php
    include_once '/xampp/htdocs/Citas/Models/PacienteModel.php';
    //controlador
    $id = $_GET['id'];
    //llamar un metodo del modelo Paciente
    $objPaciente = new PacienteModel;
    $objPaciente->eliminar($id);
    header("location: /Citas/Views/Pacientes/lista.php");
?>