import { useState } from "react"
import styles from "./styles/App.module.css"
import FormRegisterNote from "./components/FormRegisterNote"
import ListNotes from "./components/ListNotes"
import FormNoteHook from "./components/FormNoteHook"

function App() {
  const [listNotes, setListNotes] = useState([])

  return (
    <>
      <section className={styles.container}>
        <h1 className={styles.title}>App de Notas</h1>
        <section className={styles.container_note}>
          <div>
              <h2 className={styles.subtitle}>Registrar Nota</h2>
              <FormNoteHook listNotes={listNotes} setListNotes={setListNotes}/>
          </div>
          <div>
              <h2 className={styles.subtitle}>Notas</h2>
              <ListNotes listNotes={listNotes} setListNotes={setListNotes} />
          </div>
        </section>
      </section>
    </>
  )
}

export default App
