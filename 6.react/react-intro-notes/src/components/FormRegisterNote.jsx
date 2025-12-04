import React, { useState } from 'react'
import { v4 as uuidv4 } from 'uuid';

export default function FormRegisterNote({listNotes, setListNotes}) {
    //manejo de estados
    const [inputNote, setInputNote] = useState('');
    const [description, setDescription] = useState('');

    //capturamos los valores
    const handleInputNote = (e) => {
        setInputNote(e.target.value)
        //console.log(e.target.value);
    }

    const handleInputDescription = (e) => {
        setDescription(e.target.value)
        //console.log(e.target.value);
    }

    const handleSubmit = (e) => {
        e.preventDefault()

        setListNotes([...listNotes, {
            id: uuidv4(),
            title: inputNote,
            description: description
        }])

        //limpiamos los input de entradas
        setInputNote('')
        setDescription('')
    }

    return (
        <form action="" onSubmit={handleSubmit}>
            <input type="text" className='form-control my-3' placeholder='Titulo de la nota' value={inputNote} onChange={(e) => handleInputNote(e) }/>
            <textarea className='form-control my-3' placeholder='Descripcion...' value={description} onChange={(e) => handleInputDescription(e) }></textarea>
            <input type="submit" className='btn btn-dark' value='Guardar Nota' />
        </form>
    )
}
