<?php
class Reserva {
    private $aula;
    private $profesor;
    private $email;
    private $fecha;
    private $horaInicio;
    private $horaFin;

    public function __construct($aula, $profesor, $email,  $fecha, $horaInicio, $horaFin) {
        $this->aula = $aula;
        $this->profesor = $profesor;
        $this->telefono = $email;
        $this->fecha = $fecha;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
    }

    /* Funciones SQL */

    public function insert() {
        $query = "INSERT INTO Reservas (aula, profesor, email, fecha, horaInicio, horaFin) VALUES ";
        $query .= "('$this->aula', '$this->profesor', '$this->telefono',  '$this->fecha', '$this->horaInicio', '$this->horaFin')";
        return $query;
    }

    public function update($id) {
        $query = "UPDATE Reservas SET aula = '$this->aula',  fecha = '$this->fecha', horaInicio = '$this->horaInicio', horaFin = '$this->horaFin' WHERE id = $id";
        return $query;
    }

    public function delete($id) {
        $query = "DELETE FROM Reservas WHERE id = $id";
        return $query;
    }

    public static function getById($id) {
        $query = "SELECT * FROM Reservas WHERE id = $id";
        return $query;
    }

    public static function getAll() {
        $query = "SELECT * FROM Reservas";
        return $query;
    }
}
?>
