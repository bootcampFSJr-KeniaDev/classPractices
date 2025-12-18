import { faEye, faEyeSlash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import React from 'react'

export default function Header({tareasCompletadas, setTareasCompletadas}) {
    return (
        <header className='header'>
            <h1 className='header__titulo'>Lista de Tareas</h1>
            {
                tareasCompletadas ? 
                    <button className='header__boton' onClick={() => setTareasCompletadas(false)}>No Mostrar Tareas Completadas 
                    <FontAwesomeIcon icon={faEyeSlash} className='header__icono-boton'/>
                    </button>
                :
                    <button className='header__boton' onClick={() => setTareasCompletadas(true)}>Mostrar Tareas Completadas 
                    <FontAwesomeIcon icon={faEye} className='header__icono-boton'/>
                    </button>
            }
            
        </header>
    )
}
