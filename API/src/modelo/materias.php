<?php

class Materia {
    
    private $codigo; //C32
    private $nombre; // Programacion
    private $carreras; // TICS
	

    public function __construct($codigo, $nombre, $carreras) {

        $this->codigo = $codigo;
        $this->nombre= $nombre;
		$this->carreras = $carreras;
	
    }


	/*Funciones SQL*/

	public function insert() {

		$query = "INSERT INTO Materias (codigo, nombre, carreras) VALUES ";
		$query .= "('$this->codigo', '$this->nombre','$this->carreras')";
		return $query;
	}

	public function update($id) {

		$query = "UPDATE materuas SET codigo = '$this->codigo', nombre = '$this->nombre' WHERE id = $id";
		return $query; 
	}

	public function delete($id) {

		$query = "DELETE FROM materias WHERE id = $id";
		return $query; 
	}

	public static function getById($id) {
		$query = "SELECT * FROM materias WHERE id = $id";
		return $query; 
	}

	public static function getAll() {
		$query = "SELECT * FROM materias";
		return $query; 
	}

}

?>