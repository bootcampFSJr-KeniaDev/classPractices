import { create } from "zustand";
import { persist } from "zustand/middleware";

export const useCartStore = create(
    persist(
        (set) => ({
            cart: [],
            addProduct: (product) => {
                set((state) => {
                    if(state.cart.some(item => item.id === product.id)){
                        return {
                            //actualizando el carrito
                            cart: state.cart.map((item) => item.id === product.id ? {...item, quantity: item.quantity + 1} : item )
                        }
                    }else{
                        return { cart: [...state.cart, {...product, quantity: 1 }] }
                    }
                });
            },
            deleteItem: (product) => {
                set((state) => {
                    if(state.cart.some(item => item.id === product.id)){
                        if(product.quantity > 1){
                            return {
                                cart: state.cart.map((item) => item.id === product.id ? {...item, quantity: item.quantity - 1} : item )
                            }
                        }else{
                            return {
                                cart: state.cart.filter(item => item.id !== product.id)
                            }
                        }
                    }
                })
            }
        }),
        {
            name: 'cart-storage', //clave del storage
        }
    )
);