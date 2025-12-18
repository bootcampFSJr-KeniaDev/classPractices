<?php

require_once "./bootcamp.php";

class BootcampNoINCAF extends Bootcamps{

    public function temario()
    {
        $temario = ["HTML & CSS","PHP", "POO", "SOLID", "patrones","laravel"];
        echo "Temario del bootcamp: " . implode(", ", $temario);
    }
}