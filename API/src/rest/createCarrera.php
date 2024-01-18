<?php

require_once '../modelo/carreras.php';  // Asegúrate de tener la ruta correcta al archivo de la clase Carrera
require_once '../modelo/conexionBD.php';
require_once '../queries/sql.php';

// Verificar si se han recibido los datos del formulario
if (isset($_POST['nombre']) && isset($_POST['profesores']) && isset($_POST['horarios'])) {
    // Crear una instancia de la clase conexionBD
    $db = new conexionBD();
    $conn = $db->get_con();

    // Filtrar y escapar las variables de entrada
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $profesores = $conn->real_escape_string($_POST['profesores']);
    $horarios = $conn->real_escape_string($_POST['horarios']);

    // Llamada a la función crearCarrera
    $resultado = crearCarrera($conn, $nombre, $profesores, $horarios);

    if ($resultado) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }

    // Desconectarse de la base de datos
    $db->dbDisconnect();
}

?>

    







?>
