class Baldosas {
    altodelabaldosa; anchodelabaldosa; material; marca; precio

    constructor(altodelabaldosa, anchodelabaldosa, material, marca, precio){
        this.altodelabaldosa=altodelabaldosa;
        this.anchodelabaldosa=anchodelabaldosa;
        this.material=material;
        this.marca=marca;
        this.precio=precio
    }

    espacio(altoT,anchoT){
        
        return ((altoT/this.altodelabaldosa)*(anchoT/this.anchodelabaldosa))
    }
}