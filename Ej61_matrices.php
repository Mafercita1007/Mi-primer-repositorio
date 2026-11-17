<!DOCTYPE html>
<html>
<head>
    <title>Ej61 Matrices</title>
    <style>
      
    </style>
</head>
<body>

<?php

$MatrizA = [];
$MatrizB = [];
$MatrizC = [];

$valorA = 100;
$valorB = 500;


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $MatrizA[$i][$j] = $valorA;
        $MatrizB[$i][$j] = $valorB;
        $MatrizC[$i][$j] = $MatrizA[$i][$j] + $MatrizB[$i][$j];

        $valorA += 10;
        $valorB += 20;
    }
}

