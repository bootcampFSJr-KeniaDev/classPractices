import React from 'react'
import styles from '../styles/Notes.module.css'
import { TiDelete } from 'react-icons/ti'

export default function Note({task, deleteNote}) {
    return (
        <div className={styles.card_task}>
            <div className={styles.container_card}>
                <button className={styles.card_btn} onClick={() => deleteNote(task.id)}><TiDelete /></button>
            </div>
            <h2 className={styles.card_title}>{task.title}</h2>
            <p>{task.description}</p>
        </div>
    )
}
