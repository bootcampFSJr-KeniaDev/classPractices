import React from 'react'

export default function ItemModal({item}) {
    const {name, price, quantity, image} = item
    const subTotal = price * quantity
    return (
        <div>
            <div className='d-flex justify-content-between align-items-center'>
                <div className='d-flex align-items-center mb-3'>
                    <img src={image} alt={name} className='rounded pe-3' style={{width: '20%'}} />
                    <div className=''>
                        <p className='m-0'>{name}</p>
                        <div className='d-flex align-items-center'>
                            <p className='m-0 pe-3 text-danger'>{quantity}X</p>
                            <p className='m-0 text-secondary'>@{price}</p>
                        </div>
                    </div>
                </div>
                <h5 className='m-0'>${subTotal}</h5>
            </div>
        </div>
    )
}
