<?php

$alunos = [
    'Roberto',
    'Ana',
    'Vinícius',
    'Maria',
    'João'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
    'teste',
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];
// ... => Array unpack operator ou spread operator
$alunos2022 = [...$alunos, 'Franklin', ...$novosAlunos];

// $alunos2022 = array_merge($alunos, $novosAlunos);
// $alunos2022 = $alunos + $novosAlunos;
var_dump($alunos2022);

// nesse contexto, a função recebe uma quantidade qualquer de parâmetros
// $alunos será um array com todos os parâmetros passados
teste(...[1, 2, 3]);

function teste(int ...$alunos) {}