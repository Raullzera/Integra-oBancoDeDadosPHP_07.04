<?php
require "Usuario.class.php";
$usuario = new Usuario();

if( isset($_POST['nome'])  ){
    $nome  = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    echo "existe"
    $conn = conecta();
    if($conn){
        $user = $usuario->checkUser($email);
        if(!$user){
            $user = $usuario->inserirUsuario($nome, $email, $senha);
            if($user){
                $_SESSION['nome'] = $nome;
                header("Location:home.php")
            } else {
                echo "Erro ao cadastrar o Usuario";
            }
        }else{
            echo "Usuario já cadastrado. Faça login";
            exit();
        }

    }else{
        echo "Canco indisponivel, tente mais tarde!";
    }
}