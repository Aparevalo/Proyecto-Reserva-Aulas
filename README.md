# Instrucciones para Levantar el Proyecto

Este proyecto es una aplicación Flutter para Reserva de aulas mediante una solicitud HTTP a un API REST alojada en un servidor. A continuación, se proporcionan los pasos y comandos para levantar este proyecto, junto con las dependencias que está utilizando.

## Requisitos Previos

- Asegúrate de tener [Flutter](https://flutter.dev/docs/get-started/install) instalado en tu máquina.
- Asegúrate de tener un editor de código compatible con Flutter, como [Visual Studio Code](https://code.visualstudio.com/) con el complemento Flutter instalado.

Se recomienda utilizar uno de los siguientes servidores para ejecutar el servidor PHP y MySQL necesario para este proyecto:

- [WampServer](https://www.wampserver.com/): WampServer es una plataforma para Windows que proporciona un entorno de desarrollo web fácil de instalar y configurar. Incluye Apache, PHP y MySQL preconfigurados.

- [XAMPP](https://www.apachefriends.org/index.html): XAMPP es una solución multiplataforma que incluye Apache, MariaDB (equivalente a MySQL), PHP y Perl. Está disponible para Windows, macOS y Linux.

Estos servidores simplifican la configuración del entorno de desarrollo y facilitan la ejecución del servidor PHP y MySQL en tu máquina.

## Pasos para Levantar el Proyecto

1. **Clonar el Repositorio**
   ```bash
   git clone https://github.com/Aparevalo/Proyecto-Reserva-Aulas.git
   ```

2. **Ejecutar el Servidor PHP**

   Configura el servidor PHP con los cambios mencionados en el [`README.md`](/API/README.md) de la carpeta de [`API`](API/).
   

3. **Ejecutar el Servidor FLutter**
   
   Asegúrate de que tu servidor PHP esté en ejecución y configura el servidor Flutter con los cambios mencionados en el [`README.md`](reserva/README.md) de la carpeta de [`reserva`](reserva/).


¡Ahora deberías tener tanto la aplicación Flutter como el servidor PHP en funcionamiento! Puedes utilizar el formulario en la aplicación para crear nuevos usuarios, y la información se almacenará en la base de datos configurada.

## Capturas de Pantalla

### Formulario de Creación de Usuario
![Formulario de Creación de Usuario](images/imagen1.png)

### Respuesta de Flutter
![Respuesta Flutter](images/imagen2.png)

### Base de Datos 
1. Persona
![Persona](images/imagen3.png)
2. Usuario
![Usuario](images/imagen4.png)
