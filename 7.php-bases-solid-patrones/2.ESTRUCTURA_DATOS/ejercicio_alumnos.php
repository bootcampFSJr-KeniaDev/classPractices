<?php

$alumnos = array(
    array(
        "Estudiante" => "Katherine Argelia Chacon",
        "Carnet" => "KA2023",
        "Bootcamp" => "FullStack Jr 18",
        "Coach" => "Oscar Lemus"
    ),
    array(
        "Estudiante" => "Diego Alexander Pineda",
        "Carnet" => "DA2023",
        "Bootcamp" => "FullStack Jr 18",
        "Coach" => "Oscar Lemus"
    ),
    array(
        "Estudiante" => "Elena Alexandra Sandoval",
        "Carnet" => "EA2023",
        "Bootcamp" => "FullStack Jr 15",
        "Coach" => "Jairo Vega"
    ),
    array(
        "Estudiante" => "Rodrigo Hernandez",
        "Carnet" => "RH2023",
        "Bootcamp" => "FullStack Jr 15",
        "Coach" => "Jairo Vega"
    ),
    array(
        "Estudiante" => "Bryan Ariel Flores",
        "Carnet" => "BA2023",
        "Bootcamp" => "FullStack Jr 18",
        "Coach" => "Oscar Lemus"
    ),
    array(
        "Estudiante" => "Irene Chavez",
        "Carnet" => "IC2023",
        "Bootcamp" => "Java Developer",
        "Coach" => "Eduardo Calles"
    )
);

/*Devolver la informacion de los estudiantes del FSJ15
for($i = 0; $i < count($alumnos); $i++){
    if($alumnos[$i]["Bootcamp"] == "FullStack Jr 15"){
        $msj = "";
        $msj .= "<b>Estudiante:</b> " . $alumnos[$i]["Estudiante"] . "<br>";
        $msj .= "<b>Carnet:</b> " . $alumnos[$i]["Carnet"] . "<br>";
        $msj .= "<b>Bootcamp:</b> " . $alumnos[$i]["Bootcamp"] . "<br>";
        $msj .= "<b>Coach:</b> " . $alumnos[$i]["Coach"] . "<br><br>";
        echo $msj;
    }
}*/

//Devolver el nombre de los estudiantes del coach Oscar Lemus
foreach($alumnos as $value){
    if($value["Coach"] == "Oscar Lemus"){
        $msj = "";
        $msj .= "<b>Estudiante:</b> " . $value["Estudiante"] . "<br><br>";
        echo $msj;
    }
}


?>