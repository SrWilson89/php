class Figura{

    constructor(nombre){
        this.nombre=nombre
    }

    pinta(){
        return this.nombre
    }

    area(){
        return 0;
    }

    perimetro(){
        return 0;
    }
}

class Cuadrado extends Figura{

    constructor(nombre,lado){
        super(nombre);
        this.lado=lado;
        
    }

    area(){
        return this.lado*this.lado;
    }

    perimetro(){
        return this.lado*4;
    }
}

class Circulo extends Figura{

    constructor(nombre,radio){
        super(nombre);
        this.radio=radio;
        
    }

    area(){
        return Math.PI * this.radio * this.radio;
    }

    perimetro(){
        return 2 * Math.PI * this.radio;
    }
}

