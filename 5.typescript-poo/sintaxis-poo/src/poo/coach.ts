import { Usuario } from "./usuario";

export class Coach extends Usuario{
    bootcamp:string[]

    constructor(nombre:string, edad:number, nacionalidad:string, email:string, bootcamps:string[]){
        //super() => estoy heredando el constructor de mi clase padre
        super(nombre, edad, nacionalidad, email)
        this.bootcamp = bootcamps
    }

    // Sobreescribiendo metodos de la clase padre
    mostrarDetalles(): string {
        return `${super.mostrarDetalles()}
            Bootcamps a cargo: ${this.bootcamp}`
    }

    saludar(): string {
        return `Bienvenido ${this.nombre}, ya eres un coach de KODIGO :)`
    }

}