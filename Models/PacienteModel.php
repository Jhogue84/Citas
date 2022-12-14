<?php
    include_once '/xampp/htdocs/Citas/Config/ConectorBd.php';
    //include_once '../Config/ConectorBd.php';
    class PacienteModel{       
        //atributos
        private $pacIdentificacion;
        private $pacNombres;
        private $pacApellidos; 
        private $pacFechaNacimiento;
        private $pacSexo;
        private $pacUsuario;
        private $pacClave;
        
        //metodos
        public function listar(){
           //echo "Entramos al metodo modelo listar";
           $cadenaSql ="select * from pacientes";
           //conectarnos a la base de datos para realizar la consulta
           $objDatos = ConectorBd::consultaRetorno($cadenaSql);
           //$arrayDatos = $objDatos->fetch_assoc();
           $arrayDatos = array();
           for ($i=0;  $i < mysqli_num_rows($objDatos); $i++){
               //$p= readline($datos->fetch_assoc());
               array_push($arrayDatos, $objDatos->fetch_assoc()) ;
           }
           return $arrayDatos;
        }
        
        public function listarPaciente($id){
           //echo "Entramos al metodo modelo listar";
           $cadenaSql ="select * from pacientes where pacIdentificacion ={$id}";
           //conectarnos a la base de datos para realizar la consulta
           $objDato = ConectorBd::consultaRetorno($cadenaSql);
           //$arrayDatos = $objDatos->fetch_assoc();
           $arrayDatos = array();
           for ($i=0;  $i < mysqli_num_rows($objDato); $i++){
               //$p= readline($datos->fetch_assoc());
               array_push($arrayDatos, $objDato->fetch_assoc()) ;
           }
           return $arrayDatos;
        }
        
        public function adicionar($paciente){
            //preparamos la cadena
            $pacienteReg = new PacienteModel;
            $pacienteReg = $paciente;
            $cadenaSql ="insert into pacientes (PacIdentificacion, PacNombres, PacApellidos, "
                    . "PacFechaNacimiento, PacSexo, PacUsuario, PacClave) "
                    . "values ('{$pacienteReg->getPacIdentificacion()}', '{$pacienteReg->getPacNombres()}',"
                    . " '{$pacienteReg->getPacApellidos()}', '{$pacienteReg->getPacFechaNacimiento()}',"
                    . " '{$pacienteReg->getPacSexo()}', '{$pacienteReg->getPacUsuario()}', md5('{$pacienteReg->getPacClave()}'))";      
            //echo $cadenaSql;
            //ejecutar la cadena ... conectarme a la base de datos.
            ConectorBd::consultaSimple($cadenaSql);
        }
        
        public function verificarLogin($usuario, $clave){
            $cadenaSql = "select * from pacientes where PacUsuario='{$usuario}' and PacClave='{$clave}' ";
            $objPaciente = ConectorBd::consultaRetorno($cadenaSql);
            return $objPaciente;
        }


        public function editar($paciente){
            echo "metodo editar del PacienteModel.php";
            /*
            $cadenaSql = "update pacientes set PacNombres = '{$pacienteReg->getPacNombres()}', PacApellidos = '{$pacienteReg->getPacApellidos()}', "
                    . "PacFechaNacimiento = '{$pacienteReg->getPacFechaNacimiento()}', PacSexo = '{$pacienteReg->getPacSexo()}' , "
                    . "PacUsuario =  '{$pacienteReg->getPacUsuario()}', PacClave = md5('{$pacienteReg->getPacClave()}'"
                    . "where pacIdentificacion = '{$pacienteReg->getPacIdentificacion()}'";
            ConectorBd::consultaSimple($cadenaSql);        
             * */
             
        }
        
        public function eliminar(){
            
        }
        function getPacIdentificacion() {
            return $this->pacIdentificacion;
        }

        function getPacNombres() {
            return $this->pacNombres;
        }

        function getPacApellidos() {
            return $this->pacApellidos;
        }

        function getPacFechaNacimiento() {
            return $this->pacFechaNacimiento;
        }

        function getPacSexo() {
            return $this->pacSexo;
        }

        function getPacUsuario() {
            return $this->pacUsuario;
        }

        function getPacClave() {
            return $this->pacClave;
        }

        function setPacIdentificacion($pacIdentificacion) {
            $this->pacIdentificacion = $pacIdentificacion;
        }

        function setPacNombres($pacNombres) {
            $this->pacNombres = $pacNombres;
        }

        function setPacApellidos($pacApellidos) {
            $this->pacApellidos = $pacApellidos;
        }

        function setPacFechaNacimiento($pacFechaNacimiento) {
            $this->pacFechaNacimiento = $pacFechaNacimiento;
        }

        function setPacSexo($pacSexo) {
            $this->pacSexo = $pacSexo;
        }

        function setPacUsuario($pacUsuario) {
            $this->pacUsuario = $pacUsuario;
        }

        function setPacClave($pacClave) {
            $this->pacClave = $pacClave;
        }


    }

?>

