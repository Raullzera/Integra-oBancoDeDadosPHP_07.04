<?php

require "Usuario.class.php";
$usuario = new Usuario();

$usuario->conecta();

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else{
    echo "ID não informado. Impossivel editar o usuario";
    exit();
}

$dados = $usuario->localizarUsuario($id);

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Usuario</title>
</head>
<body>
<h2>Editar o Usuario</h2>
   <form action="editar_submit.php" method="post">

    
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

    <input 
        type="text"
        name="nome"
        value="<?php echo $dados['nome']; ?>"
        placeholder="Informe seu nome"
    >
    <br>

    <input 
        type="text"
        name="email"
        value="<?php echo $dados['email']; ?>"
        placeholder="Informe o email"
    >
    <br>

    <input 
        type="password"
        name="senha"
        value="<?php echo $dados['senha']; ?>"
        placeholder="Informe sua senha"
    >
    <br>

    <input type="submit" value="Alterar">

</form>
    
</body>
</html>