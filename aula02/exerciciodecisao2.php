<?php

$nota = readline("Digite a nota: ");
$frequencia = readline("Digite a frequencia: ");

if ($nota >= 7 && $frequencia >= 8) {
	echo "Aprovado";
}
else if ($nota >= 5 && nota < 7 && $frequencia >= 8){
	echo "Recuperação";
}
else if ($nota < 5 || $frequencia >= 8){
	echo "Reprovado";
}

echo "\n";