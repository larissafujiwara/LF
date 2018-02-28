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
echo "<hr>";
/*$a = "Jorge";

if ($a=="Lucas") {
	echo "Ola Lucas";
} else if ($a=="Marcos"){
	echo "Ola Marcos";
} else {
	echo "Ola estranho";
}*/


//maior de 18 o voto é obrigatorio
//16 e < 18 voto opcional
//<16 não vota

$idade = 16;

if ($idade>=18) {
	echo "voto obrigatorio";
}

else if ($idade >= 16 && $idade >=60) {
	echo "voto opcional";
}
else if ($idade < 16) {
	echo "não vota";
}
else {
	echo "Idade Invalida";
}