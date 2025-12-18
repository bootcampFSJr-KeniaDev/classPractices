<?php

require_once "./incaf.php";
require_once "./noIncaf.php";

#Entrada de datos
echo "<h2>Bootcamp INCAF</h2>";
$incaf = new BootcampINCAF("FSJ24a","Kenia Paiz","Gobierno sv");
print_r($incaf);
echo "<br>";
$incaf->temario();

echo "<h2>Bootcamp No INCAF</h2>";
$bootcamp = new BootcampNoINCAF("FSJ26","Oscar Lemus");
print_r($bootcamp);
echo "<br>";
$bootcamp->temario();