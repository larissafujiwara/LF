<?php

echo "<pre>";
/*
$array = ["Lucas","4linux","Joao"]; //pode colocar aspas ou não para cada palavra.
$array2 = array("Lucas","4linux","Joao");

print_r($array [1]);
*/

$pessoa = ["Larissa",22,1.58];
//var_dump($pessoa);
//echo $pessoa[1];
//eu posso usar echo quando indicar o indice. Caso contrario usar print_r
for ($i=0; $i < 3; $i++) {
	if ($i == 1) {
	 	continue;
	 } 
	echo $pessoa[$i]."\n";
}

echo "<hr>";

$pessoa = [
"nome" => "Lucas",
"idade" => 24,
"altura" => 1.80
];
print_r($pessoa["nome"]);

echo "<hr>";

$dados = [
"nome"=>"larissa",
"cidade"=>"São Paulo",
"idade"=> "22"
];
print_r($dados["idade"]);