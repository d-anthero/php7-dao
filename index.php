<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("da");
//echo json_encode($search);

//carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("davi", "12345");
//echo $usuario;

//criando um novo usaurio
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("ola");
//$aluno->insert();
//echo $aluno;

//atualizando um usuario
//$usuario = new Usuario();
//$usuario->loadById(2);
//$usuario->update("anthero", "davisenha");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(2);

$usuario->delete();

echo $usuario;
?>