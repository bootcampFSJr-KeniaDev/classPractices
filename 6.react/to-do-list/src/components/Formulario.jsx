import { faPlusSquare } from '@fortawesome/free-solid-svg-icons'
import { v4 as uuidv4 } from 'uuid';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import React, { useState } from 'react'


export default function Formulario({tareas, setTareas}) {
    const [inputTarea, setInputTarea] = useState('')

    const handleInput = (e) => {
        setInputTarea(e.target.value)
    }

    const handleSubmit = (e) => {
        e.preventDefault()

        //actualizamos el arreglo y agregamos la nueva tarea
        setTareas([...tareas, {
            //va generar un identificador unico
            id: uuidv4(),
            texto: inputTarea,
            completada: false
        }])
        setInputTarea('')
    }   

    return (
        <form action="" className='formulario-tareas' onSubmit={handleSubmit}>
            <input type="text" className='formulario-tareas__input' placeholder='Escribe una tarea' value={inputTarea} onChange={(e) => handleInput(e)}/>
            <button type='submit' className='formulario-tareas__btn'>
                <FontAwesomeIcon icon={faPlusSquare} className='formulario-tareas__icono-btn'/>
            </button>
        </form>
    )
}
