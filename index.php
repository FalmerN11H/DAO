<?php

require_once("config.php");
/*
$sql = new Sql();
$usuario = $sql->select("SELECT * FROM usuario");
echo json_encode($usuario);
*/
//Um usuario
/*
$root = new Usuario();
$root->loadbyid(1);
echo $root;
*/
//Carrega uma lista
/*
$lista = Usuario::getlist();
echo json_encode($lista);
*/
//Carrega lista de Usuarios buscando pelo login
/*
$search = Usuario::search("ma");
echo json_encode($search);
*/
//Carrega usuario buscando pelo login e senha
$usuario = new Usuario();
$usuario->login("rodrigo","rodrigosenha");
echo $usuario;
?>