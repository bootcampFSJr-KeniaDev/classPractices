import React, { useEffect, useState } from 'react'
import { fetchCharacters } from '../services/character.services'

export default function CharactersExample() {
    const [characters, setCharacters] = useState([])
    const [loading, setLoading] = useState(true)
    const [error, setError] = useState(null)

    useEffect(() => {
        (async () => {
            try{
                const data = await fetchCharacters()
                setCharacters(data)
            }catch(error){
                setError(error.message)
            }
        })
    }, [])

    console.log(characters);
    
    return (
        <div>CharactersExample</div>
    )
}
