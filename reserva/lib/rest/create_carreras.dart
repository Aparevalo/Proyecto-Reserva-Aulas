import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:reconocer/modelo/carreraModel.dart';

class carreraController {
  Future<bool> createUser(CarreraModel carrera) async {
    final response = await http.post(
      Uri.parse(
          'http://172.16.78.113:80/prueba_flutter/src/rest/createCarrera.php'),
      body: carrera.toJson(),
    );

    if (response.statusCode == 200) {
      return json.decode(response.body);
    } else {
      return false;
    }
  }
}
