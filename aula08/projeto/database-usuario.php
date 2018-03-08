<?php

require_once 'conexao.php';

function listausuarios(){
	$con = conecta();
	$sql = "SELECT*FROM usuarios";
	$result = pg_query($con,$sql);
	$usuarios = pg_fetch_all($result);
	desconecta($con);
	return $usuarios;
}

function listausuarioporid($id){
	$con = conecta();
	$sql = "SELECT*FROM usuarios WHERE id={$id}";
	$result = pg_query($con,$sql);
	$usuarios = pg_fetch_assoc($result);
	desconecta($con);
	return $usuarios;
}

function insereUsuario(array $usuario){
	$con = conecta();
	$sql = "INSERT INTO usuarios(usuario,senha) VALUES('{$usuario['usuario']}','{$usuario['senha']}')";
	pg_query($con,$sql);
	desconecta($con);
}

function atualizausuario(array $usuario){
	$con = conecta();
	$sql = "UPDATE usuarios SET usuario='{$usuario['usuario']}',senha='{$usuario['senha']}' WHERE id={$usuario['id']}";
	pg_query($con,$sql);
	desconecta($con);
}

function deletausuario ($id){
	$con = conecta();
	$sql = "DELETE FROM usuarios WHERE id={$id}";
	pg_query($con,$sql);
	desconecta($con);
}