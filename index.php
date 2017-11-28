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
//$usuario = new Usuario();
//$usuario->login("alexsandro","12345");
//echo $usuario ;

//Insere um usuario novo com INSERT
//$aluno = new Usuario("deitos","d31t0s");
//$aluno->insert();
//echo $aluno;

//Atualiza usuário com UPDATE
//$usuario = new Usuario();

//$usuario->loadById(8);
//$usuario->update("professor","1234");

//echo $usuario;

//Deleta um usuário 
$usuario = new Usuario();

$usuario->loadById(7);
$usuario->delete();

echo $usuario;
?>