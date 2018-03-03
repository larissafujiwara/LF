<?php

function negrito(){
	echo "<strong>Negrito</strong> <br>";
}

negrito();

function italico($valor = "valor",$valor2 = "valor2"){
	echo "<i><b>{$valor} - {$valor2}</b></i><br>";
}

italico("Italico");
italico("4Linux");
italico("um par","dois par");
italico();

echo "<hr>";

function quadrado($num){
	return pow($num,2);
}
function cubo($num){
	return $num * $num * $num;
}
// function potencia($num,$potencia){
// 	$numero;
// 	for ($i=0; $i < $potencia; $i++) { 
// 		$numero = $numero * $num;
// 	}
// 	return $numero;
// }

// $var = potencia(2,3);
// echo $var;
echo "<hr>";

echo "função de taxar"."<br><br>";

$taxa = 1.09;

function taxar($valor){
	global $taxa; //global: similar a ideia de constante
	return $valor + $taxa;
}
echo taxar (10);
echo "<hr>";

echo "função de contagem de fruta"."<br><br>";

function adicionar (&$fruta){
	return ++$fruta;
}

$laranjas = 5;
adicionar($laranjas);
echo "laranjas: ".$laranjas."<br>";
$limao = 10;
adicionar($limao);
echo "limao: ".$limao;
echo "<hr>";

echo "função array filter, mostrando valores pares"."<br><br>";

$array = [1,2,3,4,5,6];
$pares = array_filter($array,function($valor){
	if ($valor % 2 == 0) {
		return $valor;
	}
});
print_r($pares);
echo "<hr>";

$msg = "Olá";
$func = function ($a) use ($msg){
	$msg = "Hello ";
	echo $msg.$a;
};

$func("4Linux");