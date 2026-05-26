<?php

require "Usuario.class.php";

$usuario = new Usuario();
$usuario->conecta();


$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$usuario->alterarUsuarios($id, $nome, $email, $senha);


header("Location: tabela.php");
exit();

?>