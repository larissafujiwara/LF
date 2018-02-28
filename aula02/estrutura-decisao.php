<?php

$idade = 15;
$carteirinha = true;

if(($idade>=18) && $carteirinha){
	echo "Maior Idade e carteirinha";
} else if ($carteirinha == false) {
	echo "Maior Idade e sem carteirinha";
} else {
	echo "Menor Idade";
}

/*$a = "Jorge";

if ($a=="Lucas") {
	echo "Ola Lucas";
} else if ($a=="Marcos"){
	echo "Ola Marcos";
} else {
	echo "Ola estranho";
}*/