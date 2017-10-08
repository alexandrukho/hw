<?php
$bmw["bmw"] = [
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015"
];
$toyota["toyota"] = [
    "model" => "Camry",
    "speed" => "210",
    "doors" => "4",
    "year" => "2011"
];
$opel["opel"] = [
    "model" => "Astra",
    "speed" => "220",
    "doors" => "2",
    "year" => "2013"
];

$cars = array_merge($bmw, $toyota, $opel);

foreach ($cars as $brand => $keys) {
    echo "<br> <span>Car:</span> $brand <br>";
    foreach ($keys as $innerKeys => $value) {
        echo " " . "$value";
    }
}