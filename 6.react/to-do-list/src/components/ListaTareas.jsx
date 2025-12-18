import React from 'react'
import Tarea from './Tarea'

export default function ListaTareas({tareas, setTareas, tareasCompletadas}) {

    //funciona que sirve en el componente hijo "Tarea" 
    const completarTarea = (id) => {
        setTareas(
            tareas.map((tarea) => {
                if(tarea.id === id){
                    return {...tarea, completada: !tarea.completada}
                }
                return tarea
            })
        )
    }

    //funcion para actualizar el nombre de la tarea
    const actualizarTareaById = (id, texto) => {
        setTareas(
            tareas.map((tarea) => {
                if(tarea.id === id){
                    return {...tarea, texto: texto}
                }
                return tarea
            })
        )
    }

    //funcion para actualizar el nombre de la tarea
    const eliminarTareaById = (id) => {
        setTareas(
            tareas.filter((tarea) => tarea.id !== id)
        )
    }

    return (
        <ul className='lista-tareas'>
            {
                tareas.length > 0 ? 
                    tareas.map((tarea) => {
                        if(tareasCompletadas){
                            return (
                                <Tarea key={tarea.id} tarea={tarea} tareaCompletada={completarTarea} actualizarTareaById={actualizarTareaById} eliminarTareaById={eliminarTareaById}/>
                            )
                        }else if(!tarea.completada){
                            return (
                                <Tarea key={tarea.id} tarea={tarea} tareaCompletada={completarTarea} actualizarTareaById={actualizarTareaById} eliminarTareaById={eliminarTareaById}/>
                            )
                        }
                        return;
                    })
                : <div className='lista-tareas__mensaje'>~ No hay tareas agregadas ~</div>
            }
        </ul>
    )
}
