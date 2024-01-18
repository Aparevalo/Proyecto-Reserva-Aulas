<?php

require_once '../modelo/persona.php';
require_once '../modelo/user.php';
require_once '../modelo/conexionBD.php';
require_once '../queries/sql.php';

// Verificar si se han recibido los datos del formulario
if (
    isset($_POST['aula']) && isset($_POST['profesor']) && isset($_POST['email']) && isset($_POST['fecha']) && isset($_POST['horaInicio']) && isset($_POST['horaFin'])) {
    // Crear una instancia de la clase conexionBD
    $db = new conexionBD();
    $conn = $db->get_con();

    // Filtrar y escapar las variables de entrada
    $aula = $conn->real_escape_string($_POST['aula']);
    $profesor = $conn->real_escape_string($_POST['profesor']);
    $email = $conn->real_escape_string($_POST['email']);
    $fecha = $conn->real_escape_string($_POST['fecha']);
    $horaInicio = $conn->real_escape_string($_POST['horaInicio']);
    $horaFin = $conn->real_escape_string($_POST['horaFin']);
    
    $idProfesor=buscarIdProfesor($conn, $email);
    buscarIdAula($conn, $codigo);
    $idAula=buscarIdAula($conn, $codigo);
    buscarIdAula($conn, $codigo);

    // Llamada a la función insertarReserva
    $resultado = crearReserva($conn $idAula, $idProfesor, $email,  $fecha, $horaInicio, $horaFin);

    if ($resultado) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
    







?>
