import React, { useEffect, useState } from 'react'
import { BrowserRouter, Link, Routes, Route } from 'react-router-dom';
import CharactersSWR from './CharactersSWR';
import Favorites from './Favorites';
import styles from '../styles/Navbar.module.css'
import { MdOutlineFavorite } from "react-icons/md";
import { FaHome } from 'react-icons/fa';

export default function Navbar() {
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
        <BrowserRouter>
            <header>
                <nav className={styles.menu}>
                    <ul>
                        <li>
                            <Link to='/' className={styles.link}><FaHome /> Dragon Ball</Link>
                        </li>
                        <li>
                            <Link to='/favoritos' className={styles.link}><MdOutlineFavorite /> Favoritos</Link>
                        </li>
                    </ul>
                </nav>
                <h1>API DRAGON BALL</h1>
            </header>

            <Routes>
                <Route path='/' element={
                    <CharactersSWR 
                        favorites={favorites} 
                        setFavorites={setFavorites} 
                    />}
                />

                <Route path='/favoritos' element={
                    <Favorites 
                        favorites={favorites}
                    />}
                />
            </Routes>
        </BrowserRouter>
    )
}
