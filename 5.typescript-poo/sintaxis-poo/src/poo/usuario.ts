
export class Usuario {
    protected nombre:string
    protected edad:number
    protected nacionalidad:string
    protected email:string

    constructor(nombre:string, edad:number, nacionalidad:string, email:string){
        this.nombre = nombre
        this.edad = edad
        this.nacionalidad = nacionalidad
        this.email = email
    }

    mostrarDetalles(){
        return `Academia KODIGO, 
            Nombre Completo ${this.nombre}
            Nacionalidad: ${this.nacionalidad}
            Edad: ${this.edad}
            Correo Electronico: ${this.email}`
    }

    saludar(){
        return "Bienvenido a la academia de Kodigo"
    }
}