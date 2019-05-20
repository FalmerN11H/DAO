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
/*
$usuario = new Usuario();
$usuario->login("rodrigo","rodrigosenha");
echo $usuario;
*/
//Inserindo no banco
/*
$usuario = new Usuario();
$usuario->setLogin("rogerio");
$usuario->setSenha("rogeriosenha");
$usuario->insert();
*/
//atualizando
/*
$usuario = new Usuario();
$usuario->loadbyid(2);
$usuario->update("novonome","novasenha");
*/
?>