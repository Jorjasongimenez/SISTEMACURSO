<?php
    class conexion{
        private $servidor;
        private $usuario;
        private $contrasena;
        private $basedatos;
        public $conexion;
        public function __construct(){
            $this->usuario = "root ";
            $this->contrasena = " ";
            $this->basedatos = "bd_login";
        }
        function conectar(){
            $this ->conexion = new mysqli ($this->servidor,$this->usuario,$this->contrasena,$this->basedatos);
            $this->conexion->set_charset("utf8");
        }
        function cerrar(){
            $this ->conexion->close();
            
        }
    }
?>