import 'package:reconocer/modelo/userModel.dart';

class ReservaModel {
  String aula;
  String profesor;
  String telefono;
  String fecha;
  String horaInicio;
  String horaFin;

  ReservaModel({
    required this.aula,
    required this.profesor,
    required this.telefono,
    required this.fecha,
    required this.horaInicio,
    required this.horaFin,
  });

  @override
  Map<String, dynamic> toJson() {
    return {
      'aula': aula,
      'profesor': profesor,
      'telefono': telefono,
      'fecha': fecha,
      'horaInicio': horaInicio,
      'horaFin': horaFin,
    };
  }
}
