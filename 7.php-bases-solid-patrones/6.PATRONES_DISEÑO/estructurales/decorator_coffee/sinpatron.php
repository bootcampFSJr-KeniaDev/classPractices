<?php
/**
 * Supongamos que tenemos una clase que representa un café y queremos agregar diferentes complementos (leche, caramelo, chocolate). 
 */

class Coffee {
    public function cost() {
        return 5;
    }

    public function description() {
        return "Café simple";
    }
}

class CoffeeWithMilk extends Coffee {
    public function cost() {
        //se agregar un dolar por la leche
        return parent::cost() + 1; 
    }

    public function description() {
        return parent::description() . " con leche";
    }
}

class CoffeeWithMilkAndCaramel extends CoffeeWithMilk {
    public function cost() {
        // Se agrega 2 por el caramelo
        return parent::cost() + 2; 
    }

    public function description() {
        return parent::description() . " y caramelo";
    }
}

$coffee = new CoffeeWithMilkAndCaramel();
echo $coffee->description() . " cuesta $" . $coffee->cost();
