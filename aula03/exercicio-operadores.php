<?php
echo "<pre>";
//===========================================================================
echo "Op Aritmeticos"."\n\n";

$a = 5;
$b = 10;

$soma = $a + $b;
$sub = $a - $b;
$div = $a / $b;
$mult = $a * $b;
$mod = $a % $b;

echo $soma . "\n". $sub . "\n". $div . "\n". $mult . "\n". $mod . "\n";
echo "<hr>";
//===========================================================================
echo "Atribuição"."\n\n";

$num = 5;

$num += 5;
echo $num . "\n";
$num -= 3;
echo $num . "\n";
$num *= 10;
echo $num . "\n";
$num /= 2;
echo $num . "\n";
echo "<hr>";
//===========================================================================
echo "Incremento"."\n\n";

$cont = 0;

while ($cont <= 10) 
{
	echo $cont . " ";
	$cont++;
}
echo "<hr>";
//===========================================================================
echo "Decremento"."\n\n";

$cont = 100;

do 
{
	echo $cont . " ";
	$cont--;
} 
while ($cont >= 89);
echo "<hr>";
//===========================================================================
echo "Operadores Relacionais"."\n\n";

$num1 = 10;
$num2 = 20;

echo "Iguais"."\n\n";
var_dump($num1 == $num2);
echo "\n\n";
echo "Identicos"."\n\n";
var_dump($num1 === $num2);
echo "\n\n";
echo "Diferentes"."\n\n";
var_dump($num1 != $num2);
echo "\n\n";