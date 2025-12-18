import React, { useState } from 'react'
import CardItem from '../components/CardItem'
import MyModal from '../components/MyModal'
import { useCartStore } from '../store/cartStore'

export default function CartList() {
    const { cart, deleteItem } = useCartStore();
    let subTotal = 0
    let total = 0

    return (
        <div>
            <h2 className='text-danger my-4'>Your Cart(0)</h2>
            <section className='mb-4'>
                {
                    cart.map((item, index) => {
                        subTotal = item.price * item.quantity
                        total += subTotal

                        return (
                            <CardItem key={index} item={item} deleteItem={deleteItem} />
                        )
                    })
                }
                <div className='d-flex justify-content-between'>
                    <p>Order Total</p>
                    <h4>${total}</h4>
                </div>
                <div className='text-center'>
                    <button className='btn btn-danger' data-bs-toggle="modal" data-bs-target="#exampleModal">Confirm Order</button>
                </div>
                <MyModal cart={cart} total={total} />
            </section>
        </div>
    )
}
