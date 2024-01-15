
# Configuración del API Rest

## Configuracion de Servidor PHP

1. Abre el archivo `api/config/config.php` en tu editor de texto.

2. Modifica el contenido del archivo con la información de tu servidor MySQL:
   ```php
   <?php

   define( 'DB_HOST', 'tu_servidor_mysql' ); 
   define( 'DB_USER', 'tu_usuario_mysql' ); 
   define( 'DB_PASS', 'tu_contraseña_mysql' );             
   define( 'DB_NAME', 'tu_base_de_datos_mysql' );      

   ?>
   ```
   Asegúrate de reemplazar `tu_servidor_mysql`, `tu_usuario_mysql`, `tu_contraseña_mysql` y `tu_base_de_datos_mysqlcon` la información correcta de tu entorno.

#### Configuración de la Base de Datos

1. Instala un cliente MySQL, como [phpMyAdmin](https://www.phpmyadmin.net/) o [MySQL Workbench](https://www.mysql.com/products/workbench/).

2. Importa el archivo SQL ubicado en `api/config/sql` [sql.sq](src/config/db_config.php) en tu cliente MySQL. Este archivo contiene la estructura de la base de datos necesaria para el proyecto.
