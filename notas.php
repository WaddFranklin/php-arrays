<?php

$notas = [
    'Roberto' => 7,
    'Ana' => 10,
    'Vinícius' => 6,
    'Maria' => 9,
    'João' => 8,
];

/*
    sort() => 
    rsort() => 
    asort() => 
    arsort() => 
    ksort() => 
    krsort() => 
    usort() => 
    ursort() => 
    uasort() => 
    uarsort() => 
    uksort() => 
    ukrsort() => 
*/
krsort($notas);
var_dump($notas);