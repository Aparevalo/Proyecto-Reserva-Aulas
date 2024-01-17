<?php

class Aula {
    
    private $codigo; //A10
    private $ubicacion; // Bloque A
	private $materias; // Array
    private $carreras; // Array
	

    public function __construct($codigo, $ubicación, $materias, $carreras) {

        $this->codigo = $codigo;
        $this->ubicacion = $ubicacion;
        $this->materias= $materias;
		$this->carreras = $carreras;
	
    }


	/*Funciones SQL*/

	public function insert() {

		$query = "INSERT INTO Aulas (codigo, ubicacion, materias, carreras) VALUES ";
		$query .= "('$this->codigo', '$this->ubicacion','$this->materias','$this->carreras')";
		return $query;
	}

	public function update($id) {

		$query = "UPDATE aulas SET codigo = '$this->codigo', ubicacion = '$this->ubicacion' WHERE id = $id";
		return $query; 
	}

	public function delete($id) {

		$query = "DELETE FROM aulas WHERE id = $id";
		return $query; 
	}

	public static function getById($id) {
		$query = "SELECT * FROM aulas WHERE id = $id";
		return $query; 
	}

	public static function getAll() {
		$query = "SELECT * FROM aulas";
		return $query; 
	}

}

?>