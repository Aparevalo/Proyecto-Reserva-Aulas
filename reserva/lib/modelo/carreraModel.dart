class CarreraModel {
  String nombre;
  String profesores;
  String horario;

  CarreraModel({
    required this.nombre,
    required this.profesores,
    required this.horario,
  });

  @override
  Map<String, dynamic> toJson() {
    return {
      'nombre': nombre,
      'profesores': profesores,
      'horario': horario,
    };
  }
}
