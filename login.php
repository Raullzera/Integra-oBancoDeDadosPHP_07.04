<?php
session_start();
require "Usuario.class.php";
require "conexao.php";

$conn = conecta();
if($conn){
    if (isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $user = $usuario->checkUser($email);
        if ($user){
            $user = $usuario->checkPass($email, $senha);

            $_SESSION['nome'] = $nome;
            header("Location:home.php");
            header("Location:cadastrar.php");   
        }else {
            echo "Usuario não cadastrado";
        }
    }

} else{
    echo "Banco Indisponivel. Tente mais tarde";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>
<body>
    <h2>Cadastro de Usuarios</h2>
    <form action="" method ="post">
        <input type="text"     name = "nome"  placehold = "Informe seu nome">  <br>
        <input type="text"     name = "email" placehold = "Informe o email">   <br>
        <input type="password" name = "senha" placehold = "Informe sua senha"> <br>
        <input type="submit" name="botao" value="Cadastrar">
    </form> 
    
</body>
</html>