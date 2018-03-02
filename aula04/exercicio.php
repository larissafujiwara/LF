<?php

echo "<pre>";

$pessoa = 
[
	"nome" => "Larissa", 
	"idade" => 22, 
	"email" => "email@email.com"
];
echo "Meu nome é " . $pessoa["nome"]."\n\n";
echo "Tenho ".$pessoa["idade"]." anos"."\n\n";
echo "Meu email é ".$pessoa["email"]."\n\n";
echo "<hr>";

$pessoas = 
[	
	[
	"nome" => "Larissa", 
	"idade" => 22, 
	"email" => "email@email.com"
	],
	[
	"nome" => "Vitor", 
	"idade" => 24, 
	"email" => "email@email.com"
	],
	[
	"nome" => "Bianca", 
	"idade" => 25, 
	"email" => "email@email.com"
	]
];
foreach ($pessoas as $pessoa) {
	echo "Meu nome é " . $pessoa["nome"]."\n\n";
	echo "Tenho ".$pessoa["idade"]." anos"."\n\n";
	echo "Meu email é ".$pessoa["email"]."\n\n";
	echo "<hr>";
}