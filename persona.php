<?php 

class Persona {
    public $nombre;
    public $edad;
    public $telefono;

    public function __construct($nombre, $edad, $telefono) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->telefono = $telefono;
    }
}




?>