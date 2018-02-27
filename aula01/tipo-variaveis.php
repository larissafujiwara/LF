<?php

echo "<pre>";

//Boolean
$verdadeiro = true;
$falso = false;
var_dump($verdadeiro);
var_dump($falso);
echo "<hr>";

//integer
$inteiro = 10;
var_dump($inteiro);
echo "<hr>";

//float
$flutuante = 2.5;
var_dump($flutuante);
echo "<hr>";

//string
$texto = "Texto";
var_dump($texto);
echo "<hr>";

//array
$array = [];
var_dump($array);
echo "<hr>";

//object - Aqui foi criado um objeto sem conteudo - Utilizado para orientação a objeto
$objeto = new stdClass;
var_dump($objeto);
echo "<hr>";

//NULL
$nulo = NULL;
var_dump($nulo);
echo "<hr>";