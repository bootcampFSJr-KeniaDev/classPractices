import React from 'react'
import { AiOutlineLoading } from 'react-icons/ai'
import styles from '../styles/Loading.module.css'

export default function Loading() {
    return (
        <div className={styles.loading}>
            <AiOutlineLoading className={styles.icon}/>
        </div>
    )
}

