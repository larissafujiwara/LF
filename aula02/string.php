<?php

echo "<pre>";
$a = "1,2,3";
echo "Testando $a"; //se tivermos uma variavel, ela sera exibida
echo "<br>";
echo 'Testando $a'; //aqui o $a é exibido, ou seja, não chama a variavel
echo "<hr>";
echo 'Testando '.$a.'!';
echo "<hr>";
echo "\" \n";
echo '\'';
echo "<br>";
echo 'Testando '.$a.'!'."<br>";
$carro = "Gol";
$meuCarro = "Meu carro é: ";
echo $meuCarro.$carro;
echo "<hr>";