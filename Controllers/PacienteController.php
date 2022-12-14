<?php

/* /este archivo recibe peticiones, por medio de las vistas; y este archivo 
 * se comunica con el modelo */
//include_once '../Models/PacienteModel.php';
include_once '/xampp/htdocs/Citas/Models/PacienteModel.php';
//recibir la informacion o algun dato de las vistas:
//$accion = $_GET["accion"];//aqui se recibe la accion
//echo "Accion metodo GET: ". $accion;
if (isset($_POST["accion"])) {
    $accion = $_POST["accion"];
    if ($accion == "Iniciar Sesion") {
        //llamamos al metodo iniciarSesion()
        PacienteController::iniciarSesion();
    }
    if ($accion == "Registrar") {//aqui se compara
        //llamamos al metodo registrar()
        PacienteController::registrar();
    }
}


if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    if ($accion == "listar") {
        //llamamos al metodo iniciarSesion()
        PacienteController::listarPacientes();
        header("location: /Citas/Views/Pacientes/lista.php");
    }
}

class PacienteController {

    //atributos
    //metodos
    public static function registrar() {
        $paciente = new PacienteModel();
        //este controlador realiza la peticion al modelo BD.
        //recibo los datos del paciente a registrar
        $pacIdentificacion = $_POST["pacIdentificacion"];
        $pacNombres = $_POST["pacNombres"];
        $pacApellidos = $_POST["pacApellidos"];
        $pacFechaNacimiento = $_POST["pacFechaNacimiento"];
        $pacSexo = $_POST["pacSexo"];
        $pacUsuario = $_POST["pacUsuario"];
        $pacClave = $_POST["pacClave"];

        //crear un objeto tipo Pacientes y eviar todos esto datos
        //llamar al metodo ingresar, crear -- modelo (adicionar)
        $paciente->setPacIdentificacion($pacIdentificacion);
        $paciente->setPacNombres($pacNombres);
        $paciente->setPacApellidos($pacApellidos);
        $paciente->setPacFechaNacimiento($pacFechaNacimiento);
        $paciente->setPacSexo($pacSexo);
        $paciente->setPacUsuario($pacUsuario);
        $paciente->setPacClave($pacClave);
        //llamando la metodo registrar paciente
        $paciente->adicionar($paciente);
        //redireccionar
        header("Location: ../crearCuenta.php");
    }

    public static function iniciarSesion() {
        $pacUsuario = $_POST["usuario"];
        $pacClave = $_POST["clave"];

        //enviar los datos al modelo
        //echo "Usuario: ".$pacUsuario;
        //echo "<br>Clave: ".$pacClave;
        $paciente = new PacienteModel;
        //$paciente->setPacUsuario($pacUsuario);
        //$paciente->setPacClave($pacClave);
        //metodo del modelo para verificar los datos
        $objPaicenteLog = $paciente->verificarLogin($pacUsuario, $pacClave);
        $arrayPacienteLog = $objPaicenteLog->fetch_assoc();
        print_r($arrayPacienteLog);
        if ($arrayPacienteLog == null) {
            header("location: ../index.php?sms=1");
            //echo "Usuario y/o contraseña son incorrectos.";
        } else {
            //echo "Bienvenido al sistema de informacion.";
            header("location: ../Views/principal.php");
        }
    }

    public static function listarPacientes() {
        /* listar los pacientes */
        $objPacienteModel = new PacienteModel();
        $arrayDatos = $objPacienteModel->listar();
        /* fin listar los pacientes */
        return $arrayDatos;
    }

}
?>

