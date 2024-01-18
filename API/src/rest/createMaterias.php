<?php

require_once '../modelo/aulas.php';
require_once '../modelo/materias.php';
require_once '../modelo/carreras.php';
require_once '../modelo/conexionBD.php';
require_once '../queries/sql.php';


// Verificar si se han recibido los datos del formulario
if (isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['carreras'])) {
	
	// Crear una instancia de la clase conexionBD
	$db = new conexionBD();
	$conn=$db->get_con();
    
	// Filtrar y escapar las variables de entrada
    $codigo = $conn->real_escape_string($_POST['codigo']);
	$ubicacion = $conn->real_escape_string($_POST['nombre']);
	$carreras = $conn->real_escape_string($_POST['carreras']);
	

    // Crear el objeto Materias
    
    $Materia = new Materia($codigo, $nombre, $carreras);
    $Carreras = new Carreras();
    // Llamada a la función crearMaterias
    $resultado = crearMaterias($conn, $codigo, $nombre, $materias,);
	
	if ($resultado) {
		echo json_encode(true);
	} else {
		echo json_encode(false);
	}
	
	
	// Desconectarse de la base de datos
	$db->dbDisconnect();    
	

	
}

?>
