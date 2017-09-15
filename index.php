<?php 

require_once("config.php");

//Carregar um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

// Lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carregar usuarios pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//carregar usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("master", "master");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("alu", "sahus");
//$aluno->insert();
//echo $aluno;
/*
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "#$@$%");
echo $usuario;
*/


$usuario = new Usuario();
$usuario->loadById(3);

$usuario->delete();

echo $usuario;

 ?>