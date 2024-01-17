<?php

class Carrera {
    private $nombre;
    private $profesores;
    private $horarios;

    public function __construct($nombre, $profesores, $horarios) {
        $this->nombre = $nombre;
        $this->profesores = $profesores;
        $this->horarios = $horarios;
    }

    /* Funciones SQL */

    public function insert() {
        $query = "INSERT INTO Carreras (nombre, profesores, horarios) VALUES ";
        $query .= "('$this->nombre', '$this->profesores', '$this->horarios')";
        return $query;
    }

    public function update($id) {
        $query = "UPDATE Carreras SET nombre = '$this->nombre',  WHERE id = $id";
        return $query; 
    }

    public function delete($id) {
        $query = "DELETE FROM Carreras WHERE id = $id";
        return $query; 
    }

    public static function getById($id) {
        $query = "SELECT * FROM Carreras WHERE id = $id";
        return $query; 
    }

    public static function getAll() {
        $query = "SELECT * FROM Carreras";
        return $query; 
    }
}

?>
