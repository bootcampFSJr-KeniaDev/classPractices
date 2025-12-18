import axios from 'axios'
import React from 'react'
import useSWR from 'swr'
import styles from '../styles/Characters.module.css'
import { FaHeart } from 'react-icons/fa'
import Loading from './Loading'

const fetcher = async (url) => { 
    //solo testeando que se vea el loading
    await new Promise((resolve) => setTimeout(resolve, 2000)); // 2 segundos de retraso

    return axios.get(url).then((res) => res.data).catch((error) => { throw new Error(`Error al cargar los datos: ${error}`)})
}

export default function CharactersSWR({favorites, setFavorites}) {
    const { data, error, isLoading } = useSWR("https://dragonball-api.com/api/characters/", fetcher)

    console.log(data);

    //metodo para agregar o quitar favoritos
    const toggleFavorite = (character) => {
        if(favorites.some((fav) => fav.id == character.id)){
            setFavorites(favorites.filter((fav) => fav.id !== character.id))
        }else{
            setFavorites([...favorites, character])
            //setIsFavorite(true);
        }
    }

    //Validamos el error y loading
    if(error) return <div>{error.message}</div>

    // if(isLoading) return <div>cargando...</div>
    if(isLoading) return <Loading />
    
    return (
        <div className={styles.container}>
            <h2>Personajes..</h2>
            <div className={styles.container_card}>
            {
                data && data.items.map((character) => {
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
