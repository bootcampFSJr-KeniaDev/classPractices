import { faCheckSquare, faEdit, faSquare, faTimes } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import React, { useState } from 'react'

export default function Tarea({tarea, tareaCompletada, actualizarTareaById, eliminarTareaById}) {
    //verificamos con un estado si la persona esta editando la tarea
    const [editar, setEditar] = useState(false)
    //estado para el input
    const [actualizarTarea, setActualizarTarea] = useState(tarea.texto)

    const handleActualizar = (e) => {
        e.preventDefault()
        actualizarTareaById(tarea.id, actualizarTarea)
        setEditar(false)
    }

    return (
        <li className='lista-tareas__tarea'>
            <FontAwesomeIcon icon={tarea.completada ? faCheckSquare : faSquare} className='lista-tareas__icono lista-tareas__icono-check' onClick={() => tareaCompletada(tarea.id)}/>

            <div className='lista-tareas__texto'>
                {/** condicionamos si esta editando la tarea aparece un input sino solo el texto */}
                {editar ? 
                        <form action="" className='formulario-editar-tarea' onSubmit={handleActualizar}>
                            <input type="text" className='formulario-editar-tarea__input' value={actualizarTarea} onChange={(e) => setActualizarTarea(e.target.value)}/>

                            <input type="submit" value="Actualizar" className='formulario-editar-tarea__btn'/>
                        </form>
                    : tarea.texto
                }
            </div>
            <div className='lista-tareas__contenedor-botones'>
                <FontAwesomeIcon icon={faEdit} className='lista-tareas__icono lista-tareas__icono-accion' onClick={() => setEditar(!editar)}/>
                <FontAwesomeIcon icon={faTimes} className='lista-tareas__icono lista-tareas__icono-accion' onClick={() => eliminarTareaById(tarea.id)}/>
            </div>
        </li>
    )
}
