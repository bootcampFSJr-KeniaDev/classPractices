import React from 'react'
import ItemModal from './ItemModal'

export default function MyModal({cart, total}) {

    return (
        <div className="modal fade" id="exampleModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div className="modal-dialog">
                <div className="modal-content">
                    <div className="modal-header">
                        <h1 className="modal-title fs-5" id="exampleModalLabel">Order Confirmed</h1>
                        <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div className="modal-body">
                        <p>We hope you enjoy your food!</p>
                        <div className='py-3'>
                            {
                                cart.map((item, index) => {
                                    return (
                                        <ItemModal key={index} item={item} />
                                    )
                                })
                            }
                            <div className='d-flex justify-content-between px-4'>
                                <p>Order Total</p>
                                <h4 className='fw-bold'>${total}</h4>
                            </div>
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" className="btn btn-danger">Start New Order</button>
                    </div>
                </div>
            </div>
        </div>
    )
}