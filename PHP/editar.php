<?php

require "Usuario.class.php";
$usuario = new Usuario();

if(iiset($_GET['id'])){
    $id = $_GET['id'];
} else{
    echo "ID não informado. Impossivel editar o usuario";
    exit();
}

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Usuario</title>
</head>
<body>
<h2>Cadastro de Usuario</h2>
    <form action="editar_submit.php" method ="post">
        <input type="text"     name = "nome"    placeholder = "Informe seu nome">  <br>
        <input type="text"     name = "email"   placeholder = "Informe o email">   <br>
        <input type="password" name = "senha"   placeholder = "Informe sua senha"> <br>
        <input type="submit"   name=  "botao"   value="Cadastrar">
    </form> 
    
</body>
</html>