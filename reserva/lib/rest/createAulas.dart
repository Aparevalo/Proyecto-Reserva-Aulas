// userController.dart
import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:reconocer/modelo/AulasModel.dart';


class AulasController {


  Future<bool> createAulas(AulasModel aulas) async {
    final response = await http.post(
      Uri.parse('http://192.168.1.27:80/prueba_flutter/src/rest/createAulas.php'),
      body: aulas.toJson(),
    );

    if (response.statusCode == 200) {
      return json.decode(response.body);
    } else {
      return false;
    }
  }

}