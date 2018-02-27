<?php

echo "<pre>";

$var = 10;
var_dump($var);
//os casos abaixo eu tenho conversão de tipos de variaveis. Caso o "$var" for 0 (e outros casos a parte), o boleano traz "falso"
$cast = (boolean) $var;
var_dump($cast);
$cast = (int) $var;
var_dump($cast);
$cast = (float) $var;
var_dump($cast);
$cast = (string) $var;
var_dump($cast);
$cast = (array) $var;
var_dump($cast);
$cast = (object) $var;
var_dump($cast);
$cast = (unset) $var;
var_dump($cast);