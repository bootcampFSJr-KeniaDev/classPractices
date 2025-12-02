import { Usuario } from "./usuario";

export class Estudiante extends Usuario{
    private estado:string
    protected carnet:string
    protected bootcamp:string

    constructor(nombre:string, edad:number, nacionalidad:string, email:string, bootcamp:string){
        super(nombre, edad, nacionalidad, email)
        this.carnet = "Kodigo2025"
        this.estado = "Activo"
        this.bootcamp = bootcamp
    }

    getEstado(){
        return this.estado
    }

    setEstado(nuevo_estado:string){
        this.estado = nuevo_estado
    }

    mostrarDetalles(): string {
        return `${super.mostrarDetalles()}
            Carnet: ${this.carnet}
            Bootcamp: ${this.bootcamp}
            Estado: ${this.estado}`
    }
}
