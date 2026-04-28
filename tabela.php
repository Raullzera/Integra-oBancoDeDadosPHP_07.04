<?php
require "Usuario.class.php";
$usuario = new Usuario();

$con = $usuario->conecta();

if($con){
    $user = $usuario->listarUsuarios();
    if(empty($user)){
        echo "Não ha usuarios para listar!";
    }else{
        foreach($user as $item){
            $id = $item['id'];
            $nome = $item['nome'];
            $email = $item['email'];
            echo "Codigo $id - Nome $nome - Emailx' $email <br>";       
        }
    }
}else{
    echo "Banco indisponivel. Tente mais tarde!"
}