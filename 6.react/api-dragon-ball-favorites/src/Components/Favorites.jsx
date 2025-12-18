import React from 'react'
import styles from '../styles/Characters.module.css'

export default function Favorites({favorites}) {
    return (
        <div className={styles.container}>
            <h2>Favoritos...</h2>
            {
                favorites.map((character) => {
                    return(
                        <div key={character.id} className={styles.card}>
                            <img src={character.image} alt={character.name}/>
                            <h3>{character.name}</h3>
                            <p><strong>Raza:</strong> {character.race}</p>
                            <p><strong>KI:</strong> {character.ki}</p>
                        </div>
                    )
                })
            }
        </div>
    )
}
