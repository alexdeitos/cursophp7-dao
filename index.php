<?php 

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//Carrega um usuário
// $alexsandro = new Usuario();
// $alexsandro->loadById(1);
// echo $alexsandro;

//Carrega uma lista de usuarios
// $lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha 
$usuario = new Usuario();
$usuario->login("alexsandro","12345");

echo $usuario ;

?>