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
import Navbar from './Components/Navbar'

function App() {

  return (
    <>
      <Navbar />
    </>
  )
}

export default App
