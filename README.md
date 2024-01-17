# Requerimientos del Sistema

## Introducción

El sistema tiene como objetivo principal proporcionar un entorno seguro y eficiente para la gestión de usuarios mediante un sistema de registro y login, siguiendo las normas [ISO 27001](https://www.iso.org/standard/54534.html), [ISO 27002](https://www.iso.org/standard/54533.html) y [ISO 9001](https://www.iso.org/standard/62085.html). Además, se destacará la importancia de la seguridad de cifrado de datos para proteger la información sensible.

## Requerimientos Funcionales

### Registro de Usuarios

1. **RF-01:** Los usuarios deben tener la capacidad de registrarse proporcionando información básica, incluyendo nombre, dirección de correo electrónico y contraseña, cumpliendo con los requisitos de seguridad de la norma [ISO 27001](https://www.iso.org/standard/54534.html).

2. **RF-02:** Se deberá enviar un correo electrónico de verificación para confirmar la autenticidad del usuario durante el proceso de registro, siguiendo las directrices de la norma [ISO 27002](https://www.iso.org/standard/54533.html).

3. **RF-03:** El sistema debe permitir a los usuarios recuperar su contraseña mediante un proceso seguro de restablecimiento de contraseña, alineándose con los controles de seguridad de la norma [ISO 27002](https://www.iso.org/standard/54533.html).

### Login

4. **RF-04:** Los usuarios deberán autenticarse con éxito antes de acceder a las funcionalidades del sistema, cumpliendo con los requisitos de autenticación de la norma [ISO 27001](https://www.iso.org/standard/54534.html).

5. **RF-05:** Se implementará un mecanismo de bloqueo de cuenta temporal después de un número definido de intentos de inicio de sesión fallidos para prevenir ataques de fuerza bruta, según las mejores prácticas de seguridad de la norma [ISO 27001](https://www.iso.org/standard/54534.html).

## Requerimientos No Funcionales

### Seguridad

6. **RNF-01:** La comunicación entre el cliente y el servidor deberá estar cifrada utilizando el protocolo HTTPS para garantizar la confidencialidad de los datos, conforme a la norma [ISO 27001](https://www.iso.org/standard/54534.html).

7. **RNF-02:** Todas las contraseñas deben almacenarse de manera segura utilizando técnicas de hashing robustas, en cumplimiento con los controles de seguridad de la norma [ISO 27002](https://www.iso.org/standard/54533.html).

8. **RNF-03:** Se implementará una política de expiración de sesiones para cerrar automáticamente las sesiones inactivas, siguiendo las directrices de gestión de riesgos de la norma [ISO 27005](https://www.iso.org/standard/68412.html).

### Usabilidad

9. **RNF-04:** La interfaz de usuario debe ser intuitiva y fácil de usar, facilitando la navegación y comprensión del sistema, de acuerdo con los principios de calidad de la norma [ISO 9001](https://www.iso.org/standard/62085.html).

10. **RNF-05:** Se proporcionará retroalimentación clara al usuario durante el proceso de registro y login, cumpliendo con los estándares de usabilidad de la norma [ISO 25010](https://www.iso.org/standard/35733.html).

### Rendimiento

11. **RNF-06:** El sistema debe ser capaz de manejar de manera eficiente un volumen esperado de usuarios simultáneos durante las horas pico, conforme a los requisitos de rendimiento de la norma [ISO 25010](https://www.iso.org/standard/35733.html).

12. **RNF-07:** Se implementarán técnicas de almacenamiento en caché para optimizar el rendimiento del sistema, siguiendo las mejores prácticas de la norma [ISO 25010](https://www.iso.org/standard/35733.html).

### Escalabilidad

13. **RNF-08:** El sistema debe ser escalable para adaptarse al crecimiento futuro del número de usuarios, alineándose con los principios de gestión del riesgo de la norma [ISO 31000](https://www.iso.org/standard/65694.html).

## Funcionamiento del Servidor PHP

Se puede revisar en el archivo [`README.md`](/API/README.md) de la carpeta de [`API`](API/).