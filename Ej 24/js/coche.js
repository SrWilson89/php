class Coche{
    color;
    puertas;
    ventanas;
    #ruedas;
    #motor;
    #marchaA;

    constructor( color, puertas, ventanas, ruedas, motor, marchaA){
        this.color=color;
        this.puertas=puertas;
        this.ventanas=ventanas;
        this.#ruedas=ruedas;
        this.#motor=motor;
        this.#marchaA=marchaA;
    }

    get marchaA(){ // TOMA DATOS
        return this.#marchaA;
    }

    get motor(){ // TOMA DATOS
        return this.#motor;
    }

    set marchaA(valor){ //ENVIA DATOS
        // this.#marchaA=valor;
    }

    sumarMarcha(){
        if (this.#marchaA<6){
            this.#marchaA = this.#marchaA+1;
            
        }else{
            alert("Estas en la ultima marcha");
        }
    }

    restaMarcha(){
        if (this.#marchaA<1){
            alert("Estas en la primera marcha");
        }else{
            this.#marchaA = this.#marchaA-1;
            
        }
    }

}