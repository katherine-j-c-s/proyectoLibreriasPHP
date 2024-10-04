<?php

class Numero {
    // Propiedad para almacenar el número
    private $numero;

    // Constructor para inicializar el número
    public function __construct($valorInicial) {
        $this->numero = $valorInicial;
    }

    // Función para actualizar el número
    public function updateNumero($nuevoValor) {
        $this->numero = $nuevoValor;
    }

    // Función para obtener el valor actual del número
    public function getNumero() {
        return $this->numero;
    }
}