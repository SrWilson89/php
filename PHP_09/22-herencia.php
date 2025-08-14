<?php
    echo '<h1>HERENCIA</h1>';

    class Persona {
        public $nombre;
        public $apellidos;
        private $edad;

        public function __construct(
            string $nombre,
            string $apellidos,
            int $edad)
            {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
            }

        private function set_edad($edad) {
            if($edad < 18) throw new Exception('Debe ser mayor de edad (>=18 años).');
            $this->edad = $edad;
        }

        function escribir() {
            echo "Soy $this->nombre $this->apellidos y tengo $this->edad años<br>";
        }
    }

    class Empleado extends Persona {
        public $puestoTrabajo;

        public function __construct(
            string $nombre,
            string $apellidos,
            int $edad,
            string $puestoTrabajo)
            {
            parent::__construct($nombre, $apellidos, $edad);
            $this->puestoTrabajo = $puestoTrabajo;
            }

        function cambiar() {
            $this->nombre = 'Pedro';
            $this->edad = 50;
            // $this->set_edad(40);
        }
    }

    $persona = new Persona('Fermin','García', 30);
    $persona->escribir();
    echo "<hr>";
    $empleado = new Empleado('Pepito', 'Sanchez', 35,'administrativo');
    $empleado->escribir();
    $empleado->puestoTrabajo = "Secretario";
    echo "<hr>";
    $empleado->cambiar();
    var_dump($empleado);
    echo "<hr>";
    // $empleado->edad = 70;
    echo '<br>';
    var_dump($persona);
