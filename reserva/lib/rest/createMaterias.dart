// userController.dart
import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:reconocer/modelo/MateriasModel.dart';


class MateriasController {


  Future<bool> createAulas(MateriasModel materias) async {
    final response = await http.post(
      Uri.parse('http://192.168.1.27:80/prueba_flutter/src/rest/createMaterias.php'),
      body: materias.toJson(),
    );

    if (response.statusCode == 200) {
      return json.decode(response.body);
    } else {
      return false;
    }
  }

}