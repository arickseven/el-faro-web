<?php
include_once 'modelo.php';

class Modelo {
    private $nombre;
    private $correo;
    private $genero;
    private $tipo;
    private $edad;

    // Constructor para inicializar los datos
    public function __construct($nombre, $correo, $genero, $tipo, $edad) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->genero = $genero;
        $this->tipo = $tipo;
        $this->edad = $edad;
    }

    // Método para procesar los datos (en este caso solo devuelve los datos)
    public function procesarDatos() {
        // Puedes hacer validaciones o manipulaciones antes de devolver los datos
        $datos = [
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'genero' => $this->genero,
            'tipo' => $this->tipo,
            'edad' => $this->edad
        ];

        // Retornar los datos procesados
        return $datos;
    }

    // Método para actualizar los datos (en este caso solo modifica los datos en el objeto)
    public function actualizarDatos($nombre, $correo, $genero, $tipo, $edad) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->genero = $genero;
        $this->tipo = $tipo;
        $this->edad = $edad;
    }
}
?>


