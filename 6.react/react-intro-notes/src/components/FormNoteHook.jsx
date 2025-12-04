import React from 'react'
import { useForm } from 'react-hook-form'
import { v4 as uuidv4 } from 'uuid';
import styles from "../styles/Form.module.css"
import { RiAddCircleFill } from "react-icons/ri";

export default function FormNoteHook({listNotes, setListNotes}) {
    const { register, handleSubmit, watch, reset, formState: { errors } } = useForm()

    // console.log(watch("description"));
    const registerNote = (data) => {
        console.log(data);
        const { title, description } = data;
        setListNotes([...listNotes, {
            id: uuidv4(),
            title: title,
            description: description
        }])

        //reseteamos los campos
        reset();
    }

    return (
        <form action="" onSubmit={handleSubmit(registerNote)} className={styles.form}>
            <div className=''>
                <input type="text" className={styles.input} placeholder='Titulo de la nota' {...register("title", {required: true})} />
            </div>
            {errors.title && <span className={styles.input_error}>Este campo es requerido</span>}
            <div>
                <textarea className={styles.input} placeholder='Descripcion...'  {...register("description", {required: true})}></textarea>
            </div>
            {errors.description && <span className={styles.input_error}>Este campo es requerido</span>}
            <div>
                <button type='submit' className={styles.btn}><RiAddCircleFill /> Guardar Nota</button>
            </div>
        </form>
    )
}
