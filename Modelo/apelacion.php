<?php
require_once('../Controlador/conexion.php');
    class apelacion extends Conexion{
        public function apelacion(){
        parent:: __construct();
        }    
        
        public function buscador($buscar){
            $sql = $this->conexionBDatos->query("select *from bp_productos where codigo ='$buscar' OR descripcion LIKE '%$buscar%' ORDER BY nombre");
            $sql=$sql->fetch_all(MYSQLI_ASSOC);
            return $sql; 
        }
        public function listado_oferta(){
            $sql = $this->conexionBDatos->query("select *from bp_productos where oferta ='S' ORDER BY nombre" );
            $sql=$sql->fetch_all(MYSQLI_ASSOC);
            return $sql; 
        }
        public function oferta_precio($menor,$dato,$mayor){
            $sql = $this->conexionBDatos->query("select *from bp_productos where precio_oferta >= '$menor' and precio_oferta <= '$mayor' and oferta='S' ORDER BY nombre");
            $sql=$sql->fetch_all(MYSQLI_ASSOC);
            return $sql; 
        }
        public function venta_precio($menor,$dato,$mayor){
            $sql = $this->conexionBDatos->query("select *from bp_productos where precio_venta >= '$menor' and precio_venta <= '$mayor' ORDER BY nombre");
            $sql=$sql->fetch_all(MYSQLI_ASSOC);
            return $sql; 
        }
        public function productos(){
            $sql = $this->conexionBDatos->query("select *from bp_productos ORDER BY nombre");
            $sql=$sql->fetch_all(MYSQLI_ASSOC);
            return $sql; 
        }

        public function usuarios($user, $pass){
            $sql= $this->conexionBDatos->query("select nombre, password from bp_clientes where nombre='$user' and password='$pass'");
            $sql=$sql->fetch_all(MYSQLI_ASSOC);
            return $sql;
        }
    }
?>