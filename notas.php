<?php

$notas = [
    'Roberto' => 7,
    'Ana' => '10',
    'Vinícius' => null,
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

echo gettype($notas) . PHP_EOL;

if(is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

function funcao(array $valor)
{
    for($i = 0 ; $i < count($valor) ; $i++) {
        echo $valor[$i];
    }
}

// array_is_list() retorna true se as chaves começam do 0, é crescente e é numérica
var_dump(array_is_list($notas));

if(array_key_exists('Vinícius', $notas)) {
    echo "Sim, Vinícius fez a prova" . PHP_EOL;
}
var_dump(isset($notas['Vinícius']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
array_search(10, $notas, true);