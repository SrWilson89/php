class Usuario{
    nombre;
    apellido;
    edad;
    genero;

    constructor(nombre,apellido,edad,genero){
        this.nombre=nombre;
        this.apellido=apellido;
        this.edad=edad;
        this.genero=genero;
    }

    tasa(numero, peso){
        if (this.genero =="hombre"){
            return (numero/peso)/0.7;
        }else{
            return (numero/peso)/0.6;
        }
    }

}