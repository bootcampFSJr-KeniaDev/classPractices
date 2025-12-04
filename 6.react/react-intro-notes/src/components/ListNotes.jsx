import React from 'react'
import Note from './Note'
import styles from '../styles/Notes.module.css'

export default function ListNotes({listNotes, setListNotes}) {
    
    const deleteNote = (id) => {
        setListNotes(listNotes.filter((task) => task.id !== id))
    }
    
    return (
        listNotes.length > 0 ? 
            listNotes.map((task) => {
                return(
                    <Note key={task.id} task={task} deleteNote={deleteNote} />
                )
            })
        : <div className={styles.alert}>No hay notas...</div>
    )
}
