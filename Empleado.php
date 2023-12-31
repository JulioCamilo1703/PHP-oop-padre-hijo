<?php

    class Empleado {
        private $nombre;
        private $apellido;
        public $salario;

        public function __construct($nombre, $apellido, $salario) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->salario = $salario;
        }

        public function getInfo(){
            return "Nombre: $this->nombre<br> Apellido: $this->apellido<br> Salario: $this->salario$ <br>";
        }

        public function obtenerNombreCompleto() {
            return "$this->nombre $this->apellido";
        }

        public function obtenerSalario() {
            return $this->salario;
        }
        public function calcularBonificacion() {
            $bonificacion = $this->salario * 0.10;
            return $bonificacion;
        }
    }


    class Gerente extends Empleado {
        protected $cargo;

        public function __construct($nombre, $apellido, $salario, $cargo) {
            parent::__construct($nombre, $apellido, $salario);
            $this->cargo = $cargo;
        }

        public function getInfo() {

            $infoEmpleado = parent::getInfo();
            return $infoEmpleado . "Cargo: $this->cargo<br>";
        }


        public function calcularBonificacion() {
            $bonificacion = $this->obtenerSalario() * 0.20;
            return $bonificacion;
        }


        public function obtenerCargo() {
            return $this->cargo;
        }
    }
?>

