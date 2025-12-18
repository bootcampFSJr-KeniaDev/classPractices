import { useEffect, useState } from 'react'
import './App.css'
import Formulario from './components/Formulario'
import Header from './components/Header'
import ListaTareas from './components/ListaTareas'

function App() {
    /**
     * La informacion se guarda en localStorage sin embargo todavia no se muestra al recargar la pagina web, por eso utilizamos "localStorage.getItem('tareas')" para obtener la informacion guardada del navegador.
     * 
     * La palabra 'tareas' se pone ese nombre porque asi le pusimos al identificador en el almacenamiento local en el setItem() -> y ese nombre aparece en la consola de chrom
     * 
     * JSON.parse(localStorage.getItem('tareas')) => transforma el formato cadena a un arreglo
     */
    const tareasGuardadas = localStorage.getItem('tareas') ? JSON.parse(localStorage.getItem('tareas')) : [];
    console.log(tareasGuardadas);

    const [tareas, setTareas] = useState(tareasGuardadas)

    const [tareasCompletadas, setTareasCompletadas] = useState(false)
    
    console.log(tareas);

    /**
     * Haremos un efecto, donde [tareas] indica que solo se ejecute una vez o cuando haya un cambio en la tarea
     */
    useEffect(() => {
      //guardamos los datos en el navegador
      /**
       * en la consola de desarrollo de chrom, se dirige a Application -> Local Storage -> ruta -> ahi se almacena lo que nosotros vamos asignando sin embargo solo permite CADENAS
       * 
       * JSON.stringify -> convierte mi arreglo en un formato de cadena de texto
       */
      localStorage.setItem('tareas', JSON.stringify(tareas));
      
    }, [tareas])

    return (
      <>
        <div className='contenedor'>
          <Header 
            tareasCompletadas={tareasCompletadas} 
            setTareasCompletadas={setTareasCompletadas}
          />
          <Formulario tareas={tareas} setTareas={setTareas}/>
          <ListaTareas 
            tareas={tareas} 
            setTareas={setTareas}
            tareasCompletadas={tareasCompletadas}
          />
        </div>
      </>
    )
}

export default App
