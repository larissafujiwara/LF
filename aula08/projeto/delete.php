<?php 

require_once 'database-usuario.php'; 

$id = $_POST['id'];


deletausuario($id);

header("Location:index.php");