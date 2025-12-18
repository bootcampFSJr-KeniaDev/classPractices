<?php

interface PaymentMethod {
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Pagando $amount con tarjeta de crédito.";
    }
}

class PaypalPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Pagando $amount con PayPal.";
    }
}

class Checkout {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment($amount) {
        $this->paymentMethod->pay($amount);
    }
}
