    <?php
    require 'Usuario.class.php';
    $usuario = new Usuario();

    $conn = $usuario->conecta();

    if ($conn){
        ?>
            <form method="POST" action="cadastrar.php">
                <input type="text"     placeholder = "digite um nome"   name = "nome"><br>
                <input type="email"    placeholder = "digite um email"  name = "email"><br>
                <input type="password" placeholder = "digite uma senha" name = "senha"><br>
                <input type="submit" value = "Login">
                <a href="cadastrar.php">Novo por aqui? Cadastre-se</a>


                <input type="submit" value = "cadastrar">
            </form>

        <?php
    }
    