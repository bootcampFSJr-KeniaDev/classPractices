import ProductsList from "./pages/ProductsList"
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import { useEffect, useState } from "react";
import CartList from "./pages/CartList";

function App() {
  return (
    <>
      <section className="container">
        <div className="row">
          <div className="col-md-8">
            <ProductsList />
          </div>
          <div className="col-md-4">
            <CartList />
          </div>
        </div>
      </section>
      
    </>
  )
}

export default App
