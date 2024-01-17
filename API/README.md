# Servidor PHP para Login y Register

## Modelo

### La clase Persona

En esta clase PHP llamada [`Persona`](src/modelo/persona.php), se define una entidad que representa a una persona con propiedades privadas como `$nombre`, `$apellido`, `$telefono`, y `$rol`. El constructor `(__construct)` se encarga de inicializar estas propiedades cuando se crea un objeto de la clase.

Luego, se definen funciones para realizar operaciones SQL comunes, como inserción, actualización y eliminación de registros en una tabla llamada Personas. Además, hay funciones estáticas para obtener información específica de la base de datos, como obtener una persona por su ID o obtener todas las personas.