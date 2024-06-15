<?php
    class BaseDatos{
        private $conexion;

        public function __construct(){
            $this->conexion= new PDO("mysql:host=localhost;dbname=bd256;","root","");
        }

        public function consulta($sql){
            $consulta = $this->conexion->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll();
        }

        public function cerrar(){
            $this->conexion = null;
        }
    }
    
?>