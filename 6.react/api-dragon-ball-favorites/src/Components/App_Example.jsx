import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import React, { useEffect, useState } from 'react'
import Characters from './Components/Characters'
import CharactersSWR from './Components/CharactersSWR'
import styles from './styles/App.module.css'
import { FaV } from 'react-icons/fa6'
import Favorites from './Components/Favorites'
import CharactersExample from './Components/CharactersExample'

function App() {
    /**
     * La informacion se guarda en localStorage sin embargo todavia no se muestra al recargar la pagina web, por eso utilizamos "localStorage.getItem('tareas')" para obtener la informacion guardada del navegador.
     * 
     * La palabra 'tareas' se pone ese nombre porque asi le pusimos al identificador en el almacenamiento local en el setItem() -> y ese nombre aparece en la consola de chrom
     * 
     * JSON.parse(localStorage.getItem('tareas')) => transforma el formato cadena a un arreglo
     */
    const favoriteStorage = localStorage.getItem('favoritesDragonBall') ? JSON.parse(localStorage.getItem('favoritesDragonBall')) : [];
    console.log(favoriteStorage);

    const [favorites, setFavorites] = useState(favoriteStorage);
    //const [favorites, setFavorites] = useState([]);

    //Haremos el useEffect para hacer el efecto de mantener los favoritos de manera local
    useEffect(() => {
        localStorage.setItem('favoritesDragonBall', JSON.stringify(favorites))
        /**
         * la dependencia en el arreglo ponemos "favorites" porque estamos indicando que cada vez que haya un cambio (agregar o quitar favoritos) se
         * debe actualizar en el localstorage
         */
    }, [favorites])

    return (
        <>
            <h1>API DRAGON BALL</h1>
            <section className={styles.container}>
                <div>
                    {/* <Characters favorites={favorites} setFavorites={setFavorites}/> */}
                    <CharactersSWR favorites={favorites} setFavorites={setFavorites}/>
                </div>
                <div>
                    <Favorites favorites={favorites}/>
                </div>
            </section>
        </>
    )
}

export default App
