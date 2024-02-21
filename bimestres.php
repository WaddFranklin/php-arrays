<?php

$notasBimestre1 = [
    'Roberto' => 7,
    'Ana' => 10,
    'Vinícius' => 4,
    'Maria' => 9,
    'João' => 8,
];

$notasBimestre2 = [
    'Roberto' => 7,
    'Ana' => 10,
    'João' => 10,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_flip($alunosFaltantes));
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
// var_dump(array_keys($alunosFaltantes));
// var_dump(array_values($alunosFaltantes));