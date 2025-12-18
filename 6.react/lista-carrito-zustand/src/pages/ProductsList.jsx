import React from 'react'
import products from '../data/products.json'
import ProductCard from '../components/ProductCard'
import { useCartStore } from '../store/cartStore'

export default function ProductsList() {
    //llamamos el estado global
    const { cart, addProduct } = useCartStore();
    console.log(cart);
    
    return (
        <>
            <h1 className='my-4'>Desserts</h1>
            <section className='row'>
                {
                    products.map((product, index) => {
                        return (
                            <ProductCard product={product} key={index} addProduct={addProduct}/>
                        )
                    })
                }
            </section>
        </>
    )
}
