import axios from 'axios'
import React, { useEffect, useState } from 'react'
import styles from '../styles/Characters.module.css'
import { FaHeart } from 'react-icons/fa'
import Loading from './Loading'

export default function Characters({favorites, setFavorites}) {

    const [characters, setCharacters] = useState([])
    //const [isFavorite, setIsFavorite] = useState(false);
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState(null)

    const toggleFavorite = (character) => {
        if(favorites.some((fav) => fav.id == character.id)){
            setFavorites(favorites.filter((fav) => fav.id !== character.id))
        }else{
            setFavorites([...favorites, character])
            //setIsFavorite(true);
        }
    }

    useEffect(() => {
        const fetchCharacters = async () => {
            try{
                //Testeando el loading
                await new Promise((resolve) => setTimeout(resolve, 2000)); // 2 segundos de retraso

                const response = await axios.get('https://dragonball-api.com/api/characters/')
                setCharacters(response.data.items)
                console.log(response.data.items);
                
            }catch(error){
                setError(error.message)
            }finally{
                setLoading(false)
            }
        }

        fetchCharacters();
    }, [])

    // console.log(favorites);
    
    if(loading) return <Loading />

    if(error) return <div>{error}</div>

    return (
        <div className={styles.container}>
            <h2>Personajes..</h2>
            <div className={styles.container_card}>
                {
                    characters.map((character) => {
                        const isFavorite = favorites.some((fav) => fav.id == character.id)
                        return(
                            <div key={character.id} className={styles.card}>
                                <img src={character.image} alt={character.name}/>
                                <h3>{character.name}</h3>
                                <p><strong>Raza:</strong> {character.race}</p>
                                <p><strong>KI:</strong> {character.ki}</p>
                                <button onClick={() => toggleFavorite(character)}><FaHeart className={isFavorite ? styles.active : styles.inactive}/></button>
                            </div>
                        )
                    })
                }
            </div>
        </div>
    )
}
