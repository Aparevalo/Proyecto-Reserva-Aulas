import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:reconocer/modelo/aulaModel.dart';

class reservaController {
  Future<bool> createUser(ReservaModel reserva) async {
    final response = await http.post(
      Uri.parse(
          'http://172.16.78.113:80/prueba_flutter/src/rest/createUser.php'),
      body: reserva.toJson(),
    );

    if (response.statusCode == 200) {
      return json.decode(response.body);
    } else {
      return false;
    }
  }
}
