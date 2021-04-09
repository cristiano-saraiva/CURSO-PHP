<?php
require_once "config.php";

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//
//echo json_encode($usuarios);

  /*traz um usuario apenas*/
//$usuario = new Usuario();  /*criar classe Usuario mais uma vez*/
//
//$usuario->loadById(3);
//
//echo $usuario;

//////////////// Carrega uma lista de usuario /////////////////////////////

/*$lista = Usuario::getList();

echo json_encode($lista);*/

//////////////// Procurar em uma lista de usuario /////////////////////////////

/*$busca = Usuario::search("Jo");

echo json_encode($busca);*/

//////////////// Procurar usuario por login e senha  /////////////////////////////

/*$usuario = new Usuario();  /*criar classe Usuario mais uma vez*/

/*$usuario->login("João", "%$#@!");

echo $usuario;*/

//////////////// insert usuario   /////////////////////////////
/*$aluno = new Usuario("Francisco", "@fran");
$aluno->insert();
echo $aluno;*/

//////////////// Atualizando usuario   /////////////////////////////
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", 'qwerty');

echo $usuario;
