# Levantar el proyecto en Flutter

## Configuraciones 

1. **Instalar Dependencias**
   ```bash
   flutter pub get
   ```
2. **Ajuste de la URL**
    Asegúrate de tener un servidor PHP en tu máquina y ajusta la URL en los archivos [`createUserRest.dart`](lib/rest/createUserRest.dart) y [`loginRest.dart`](lib/rest/loginRest.dart), alojados en la carpeta [`lib/rest/`](lib/rest/)  a la dirección del servidor donde se encuentra el script PHP. Como se muestra a continuación:

    ```dart
    Uri.parse('http://tu_direccion_ip:puerto/ruta/rest/create_user.php')
    ```


2. **Ejecutar la Aplicación**
   ```bash
   flutter run
   ```
   Esto iniciará la aplicación en el emulador o dispositivo conectado, en el caso de tener problemas con agotamiento de memoria usar :

    ```bash
    flutter run --enable-software-rendering
    ```

### Dependencias Utilizadas

- [flutter](https://pub.dev/packages/flutter): Framework de desarrollo de aplicaciones móviles.
- [http](https://pub.dev/packages/http) (versión: ^0.13.3): Para realizar solicitudes HTTP.
- [dart:convert](https://api.dart.dev/stable/dart-convert/dart-convert-library.html): Para la manipulación de datos JSON.
- [google_fonts](https://pub.dev/packages/google_fonts) (versión: ^2.0.0): Para trabajar con fuentes de Google.
- [flutter_keyboard_visibility](https://pub.dev/packages/flutter_keyboard_visibility) (versión: ^5.0.3): Para gestionar la visibilidad del teclado en Flutter.
- [provider](https://pub.dev/packages/provider) (versión: ^6.1.1): Para la gestión de estados en Flutter.
- [shared_preferences](https://pub.dev/packages/shared_preferences) (versión: ^2.0.8): Para el almacenamiento persistente de datos simples en Flutter.

## Funcinamiento de los Modulos

### Registro

[Aulas](https://github.com/Aparevalo/Proyecto-Reserva-Aulas.git/blob/daddy/README.md)


Para registrarte en la aplicacion, debes completar la siguiente información:

- **Nombre:** [Tu Nombre]
- **Apellido:** [Tu Apellido]
- **Teléfono:** [Tu Número de Teléfono]
- **Email:** [Tu Dirección de Email]
- **Contraseña:** [Tu Contraseña]

![Formulario de Creación de Usuario](/images/imagen1.png)


