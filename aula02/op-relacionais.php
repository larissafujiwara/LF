<?php

echo "<pre>";

echo "Igual";
echo "<br>";
var_dump(2==2);
var_dump(2=="2"); //analisa string
var_dump(2==3);
echo "<hr>";

echo "identico";
echo "<br>";
var_dump(2===2);
var_dump(2=== "2");
var_dump("abc"=== "abc");
echo "<hr>";

echo "Diferente";
echo "<br>";
var_dump(2!=2);
var_dump(3!=2);
echo "<hr>";

echo "Maior que";
echo "<br>";
var_dump(2<5);
var_dump(5>2);
var_dump(2>2);
echo "<hr>";

echo "Menor ou igual";
echo "<br>";
var_dump(2<=5);
var_dump(5>=2);
var_dump(2>=2);
echo "<hr>";

echo "Maior ou igual";
echo "<br>";
var_dump(2>=5);
var_dump(5>=2);
var_dump(2<=2);
echo "<hr>";