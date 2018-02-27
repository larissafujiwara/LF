<?php
echo "<pre>";

//Exercicio 1

echo "Exercicio 1";
echo "<br>";
echo "<br>";
//num projeto maior, essa duplicata de br n acontece.
$inteiro = 10;
echo $inteiro;
echo "<br>";

$flutuante = 2.5;
echo $flutuante;
echo "<br>";

$texto = "Texto";
echo $texto;
echo "<br>";

$idade = "22 anos";
echo $idade;
echo "<br>";

$cidade = "São Paulo";
echo $cidade;
echo "<br>";

$sexo = "Feminino";
echo $sexo;
echo "<hr>";

//Exercicio 2

echo "Exercicio 2";
echo "<br>";
echo "<br>";
$flutuante = 2.5;
var_dump($flutuante);
echo "<hr>";

//Exercicio 3

echo "Exercicio 3";
echo "<br>";
echo "<br>";
$var = 10;
var_dump($var);
echo "<br>";
$cast = (boolean) $var;
var_dump($cast);
echo "<br>";
$cast = (int) $var;
var_dump($cast);
echo "<br>";
$cast = (float) $var;
var_dump($cast);
echo "<br>";
$cast = (string) $var;
var_dump($cast);
echo "<br>";
$cast = (array) $var;
var_dump($cast);
echo "<br>";
$cast = (object) $var;
var_dump($cast);
echo "<br>";
$cast = (unset) $var;
var_dump($cast);
echo "<hr>";

//Exercicio Constante

echo "Exercicio Constante";
echo "<br>";
echo "<br>";
define("VERSAO",2);
echo VERSAO;
echo "<hr>";