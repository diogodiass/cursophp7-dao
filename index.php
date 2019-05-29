<?php 

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuario

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuario buscando pelo login 

//$search = Usuario::search("jo");
//echo json_encode($search);

//Busca por usuario 

$login = new Usuario();

$login->login("diogo","102030");

echo $login;

?>