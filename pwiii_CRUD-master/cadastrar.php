<?php
require "Usuario.class.php";
$usuario = new Usuario();

if( isset($_POST['nome'])  ){
    $nome  = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    
    $conn = $usuario->conexao();
    if($conn){
        $user = $usuario->checkUser($email);
        $user = $usuario->checkUser($nome);
        if($user){
            $user = $usuario->inserirUsuario($nome, $email, $senha);
        }else{
            echo "Usuario já cadastrado. Faça login";
        }

    }else{
        echo "Canco indisponivel, tente mais tarde!";
    }
}else{
    echo "Ele não vem.";
}