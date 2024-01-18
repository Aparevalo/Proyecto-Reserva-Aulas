class AulasModel {
  String codigo;
  String ubicacion;
  String materias;
  String carreras;


  AulasModel({
    required this.codigo,
    required this.ubicacion,
    required this.materias,
    required this.carreras,
  });

  
  Map<String, dynamic> toJson() {
    return {
      'codigo': codigo,
      'ubicacion': ubicacion,
      'materias': materias,
      'carreras': carreras,
    };
  }
}