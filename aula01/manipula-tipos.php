<?php

echo "<pre>";
$var = "0";
var_dump($var);
$var = $var + 20;
var_dump($var);
$var = $var + 2.5;
var_dump($var);
//diferente da linguagem javascript, o php soma as variaveis, ao invés de concatená-las
$var = 1 + "10 carros";
var_dump($var);
//o "." concatena as strings
$var = "1 casa" . "1 casa";
var_dump($var);
//aqui o programa só pegou o "1" na frente do "cachorro"
$var = "gato 1" + "1 cachorro";
var_dump($var);
//NUNCA DEVE SE SOMAR STRINGS