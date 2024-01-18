class MateriasModel {
  String codigo;
  String nombre;
  String carreras;


  MateriasModel({
    required this.codigo,
    required this.nombre,
    required this.carreras,
  });

  
  Map<String, dynamic> toJson() {
    return {
      'codigo': codigo,
      'nombre': nombre,
      'carreras': carreras,
    };
  }
}