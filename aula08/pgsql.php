<?php

$host = "localhost";
$port = "5432";
$dbname = "aula08";
$user = "larissa";
$pass = "123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

//echo $con_string;
//echo "<hr>";
$con = pg_connect($con_string);
//var_dump($con);
//$sql = "INSERT INTO usuarios(usuario, senha) VALUES ('Luana', '234')";
//pg_query($sql);

$sql = "SELECT*FROM usuarios";
$result = pg_query($con,$sql);
$usuarios = pg_fetch_all($result);
foreach ($usuarios as $usuario) {
	echo "<li> {$usuario['usuario']} </li>";
}
$senhas = pg_fetch_all($result);
foreach ($senhas as $senha) {
	echo "<li> {$senha['senha']} </li>";
}