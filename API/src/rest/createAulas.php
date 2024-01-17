<?php

require_once '../modelo/persona.php';
require_once '../modelo/user.php';
require_once '../modelo/conexionBD.php';
require_once '../queries/sql.php';


// Verificar si se han recibido los datos del formulario
if (isset($_POST['codigo']) && isset($_POST['ubicacion']) && isset($_POST['materias']) && isset($_POST['carreras'])) {
	
	// Crear una instancia de la clase conexionBD
	$db = new conexionBD();
	$conn=$db->get_con();
    
	// Filtrar y escapar las variables de entrada
    $codigo = $conn->real_escape_string($_POST['codigo']);
	$ubicacion = $conn->real_escape_string($_POST['ubicacion']);
	$materias = $conn->real_escape_string($_POST['materias']);
	$carreras = $conn->real_escape_string($_POST['carreras']);
	

    // Crear el objeto Aula
    $Aula = new Aula($codigo, $ubicacion, $materias, $carreras);

    // Llamada a la función crearAula
    $resultado = crearAula($conn, $codigo, $ubicacion, $materias, $carreras);
	
	if ($resultado) {
		echo json_encode(true);
	} else {
		echo json_encode(false);
	}
	
	
	// Desconectarse de la base de datos
	$db->dbDisconnect();    
	

	
}

?>
