<?php

class Asignacion {
    private $profesor;
    private $materia;
    private $hora_inicio;
    private $hora_fin;
    private $aula;

    public function __construct($profesor, $materia, $hora_inicio, $hora_fin, $aula) {
        $this->profesor = $profesor;
        $this->materia = $materia;
        $this->hora_inicio = $hora_inicio;
        $this->hora_fin = $hora_fin;
        $this->aula = $aula;
    }

    public function insert() {
        $query = "INSERT INTO asignaciones (profesor, materia, hora_inicio, hora_fin, aula) VALUES ";
        $query .= "('$this->profesor', '$this->materia', '$this->hora_inicio', '$this->hora_fin', '$this->aula')";
        return $query;
    }

    public function update($id) {
        $query = "UPDATE asignaciones SET profesor = '$this->profesor', materia = '$this->materia', hora_inicio = '$this->hora_inicio', hora_fin = '$this->hora_fin', aula = '$this->aula' WHERE id = $id";
        return $query;
    }

    public function delete($id) {
        $query = "DELETE FROM asignaciones WHERE id = $id";
        return $query;
    }

    public static function getById($id) {
        $query = "SELECT * FROM asignaciones WHERE id = $id";
        return $query;
    }

    public static function getAll() {
        $query = "SELECT * FROM asignaciones";
        return $query;
    }
}




?>