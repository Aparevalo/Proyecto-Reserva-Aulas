<?php

	require_once '../modelo/persona.php';
	require_once '../modelo/user.php';
	require_once '../modelo/carreras.php';
	require_once '../modelo/reserva.php';
	

	
	function verificarCorreo(mysqli $conn, $email) {
		// Obtener el correo electrónico de la base de datos
		$query = "SELECT email FROM usuarios WHERE email = '$email' LIMIT 1";
		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			// El correo electrónico existe en la base de datos
			return false;
		} else {
			// El correo electrónico no existe en la base de datos
			return true;
		}
	}
	
	
	function verificarTelefono(mysqli $conn, $telefono) {
		// Obtener el correo electrónico de la base de datos
		$query = "SELECT telefono FROM personas WHERE telefono = '$telefono' LIMIT 1";
		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			// El telefono electrónico existe en la base de datos
			return false;
		} else {
			// El telefono electrónico no existe en la base de datos
			return true;
		}
	}
	
	
	function crearUsuario(mysqli $conn, Persona $persona, $email, $hashedPassword, $salt) {
		// Intentar ejecutar la consulta SQL para insertar la persona
		if ($conn->query($persona->insert())) {
			// Obtener el ID insertado
			$insertedId = $conn->insert_id;

			if ($insertedId > 0) {
				// Código para crear un usuario
				$usuario = new User($email, $hashedPassword, $salt, 'user', $insertedId);
				$queryUsuario = $usuario->insert();

				// Intentar ejecutar la consulta SQL para crear el usuario
				if ($conn->query($queryUsuario)) {
					
					return true;
				} else {
					
					return "Error al crear el usuario: " . $conn->error;
				}
			} else {
				
				return "Error al obtener el ID insertado: " . $conn->error;
			}
		} else {
			
			return "Error al insertar la persona: " . $conn->error;
		}
	}

	
	function verificarContrasena(mysqli $conn, $email, $password_ingresada) {
    // Obtener el "salt" y el hash de la base de datos usando el email
    $query = "SELECT salt, contrasena FROM usuarios WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $salt_from_db = $row['salt'];
        $hashedPassword_from_db = $row['contrasena'];
		
		
	        // Verificar la contraseña ingresada con el hash almacenado y el "salt"
        if (password_verify($password_ingresada . $salt_from_db, $hashedPassword_from_db)) {
            // Contraseña válida
            return true;
        } else {
            // Contraseña incorrecta
            return false;
        }
    } else {
        // El usuario no existe en la base de datos
        return false;
    }
	
	}

	function buscarIdProfesor(mysqli $conn, $email){

		$query = "SELECT id,email FROM usuarios WHERE email = '$email' LIMIT 1";
		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
        	$idUser = $row['id'];
			return $idUser;
		} else {
			// El correo electrónico no existe en la base de datos
			return false;
		}
	}
	funtion buscarIdAula(mysqli $conn, $codigo){
		
		$query = "SELECT id FROM aulas WHERE id = '$codigo' LIMIT 1";
		
		$result = $conn->query($query);
		
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
        	$codigo = $row['id'];
			return $codigo;
		} else{
			// El codigo de aula  no existe en la base de datos
			return false;
		}
		
	}
	function buscarIdCarrera(mysqli $conn, $idCarrera){	
		
		$query = "SELECT id FROM carreras WHERE id = '$idCarrera' LIMIT 1";
		
		$result = $conn->query($query);
		
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
        	$idCarrera = $row['id'];
			return $idCarrera;
		}else{
			//el id de carrera no existe en la base de datos
			return false;
		}
		
	}


	#funcion crear reservas
	
	function crearReserva(mysqli $conn,$idAula, $idProfesor,$email,  $fecha, $horaInicio, $horaFin)  {
	
		if ($conn->query($profesor->getById($idProfesor))&& $conn->query($aula->getById($idAula)) ) {
			// Obtener el ID insertado
			
				// Código para crear un usuario
				$reserva = new Reserva($aula, $profesor, $email,  $fecha, $horaInicio, $horaFin);
				$queryreserva  = $reserva->insert();

				// Intentar ejecutar la consulta SQL para crear el usuario
				if ($conn->query($queryreserva)) {
					
					return true;
				} else {
					
					return "Error al crear la reserva: " . $conn->error;
				}

		} else {
			
			return "Error al insertar la reserva: " . $conn->error;
		}
	}
	#funcion crear carreras

	function crearCarrera(mysqli $conn, $nombre, $profesores, $horarios) {
		try {
			// Validar datos
			if (empty($nombre) || empty($profesores) || empty($horarios)) {
				throw new Exception("Datos de carrera incompletos.");
			}
	
			// Crear objeto Carrera
			$carrera = new Carrera($nombre, $profesores, $horarios);
	
			// Iniciar transacción y ejecutar consulta
			$conn->begin_transaction();
			$queryCarrera = $carrera->insert();
	
			if ($conn->query($queryCarrera)) {
				$conn->commit();
				return true;
			} else {
				throw new Exception("Error al crear la carrera: " . $conn->error);
			}
		} catch (Exception $e) {
			// Rollback en caso de error
			$conn->rollback();
			return "Error: " . $e->getMessage();
		}
	}
	
	
	



	
	 
	
  
?>