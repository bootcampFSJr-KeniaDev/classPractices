<?php

// Componente base
interface Coffee {
    public function cost();
    public function description();
}

// Implementación base
class SimpleCoffee implements Coffee {
    public function cost() {
        return 5; // Precio base
    }

    public function description() {
        return "Café simple";
    }
}

// Clase abstracta de decorador
abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }

    public function description() {
        return $this->coffee->description();
    }
}

// Decoradores específicos
class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 1; // Agrega 1 por la leche
    }

    public function description() {
        return parent::description() . " con leche";
    }
}

class CaramelDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 2; // Agrega 2 por el caramelo
    }

    public function description() {
        return parent::description() . " con caramelo";
    }
}

class ChocolateDecorator extends CoffeeDecorator {
    public function cost() {
        return parent::cost() + 3; // Agrega 3 por el chocolate
    }

    public function description() {
        return parent::description() . " con chocolate";
    }
}

// Uso
$coffee = new SimpleCoffee(); // Café base
$coffee = new MilkDecorator($coffee); // Se agrega leche
$coffee = new CaramelDecorator($coffee); // Se agrega caramelo
$coffee = new ChocolateDecorator($coffee); // Se agrega chocolate

echo $coffee->description() . " cuesta $" . $coffee->cost();
