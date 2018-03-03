<?php

//função para retornar se numero é par ou impar
//função que receba dois numeros e retorne o maior
//função que receba uma idade e retorne se é maior de idade
//função que receba um array com informações de uma pessoa e diga se ela pode dirigir
//pessoa = ['nome','idade','temHabilitacao']

echo "função para retornar se numero é par ou impar"."<br><br>";

function verificar($i){
	
	if ($i % 2 == 0){
		return "par";
	}
	else {
		return "impar";
	}
};
echo verificar(50);
echo "<hr>";

echo "função que receba dois numeros e retorne o maior"."<br><br>";

function maior($num1, $num2){
	if ($num1 > $num2){
		return $num1;
	}
	else if ($num1 == $num2) {
		return "iguais";
	}
	else {
		return $num2;
	}
};
echo maior(10,0);
echo "<hr>	";

echo "função que receba uma idade e retorne se é maior de idade"."<br><br>";

function idade($num){
	if ($num >= 18){
		return $num ." maior de idade";
	}
	else{
		return $num . " menor de idade";
	}
};
echo idade(15);
echo "<hr>";

echo "função que receba um array c/ informações de uma pessoa e diga se ela pode dirigir"."<br><br>";

function podeDirigir(array $pessoa){
	if ($pessoa['idade'] >= 18 && $pessoa['temHabilitacao']){
		return "Pode dirigir";
		}
	else{
		return "Não pode dirigir";
	}
}
$pessoa = ['nome'  => 'Luis',
			'idade' => 20,
			'temHabilitacao' => false];
echo podeDirigir($pessoa);
echo "<hr>";