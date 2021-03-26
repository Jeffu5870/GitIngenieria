<?php
include("datoscon.php");
    class conexion{
            protected $conexionBDatos;
            public function Conexion(){
            $this->conexionBDatos=new mysqli(HOST,USUARIO,PASS,BD);
            if($this->conexionBDatos->connect_errno){
            echo 'Conexion Fallida '. $this->conexionBDatos->connect_error;
            return;
            }
            $this->conexionBDatos->set_charset(CHARSET);
        }
    }
?>