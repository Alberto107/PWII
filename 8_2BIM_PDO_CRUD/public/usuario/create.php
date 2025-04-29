<?php

     include '../../config/connection.php';

?>

<form action="create.php" method="POST">

    <label for="username">Nome de Usuário</label>
    <input type="text" name="username" id="username"><!-- id -> label name -> Banco de Dados -->

    <br>

    <label for="password">Senha</label>
    <input type="password" name="password" id="password">

    <br>

    <button type="submit">Cadastrar</button>
    
</form>

<!-- recebendo os dados -->

<?php
//if else ternário
    $username = isset($_POST['username']) ? $_POST['username'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();

    //statement
    $stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (:username, :password)'); //insira na tabela usuário os valores da variáveis username e password
    //função do pdo, inserir em usuario (tabela do banco de Dados), nas colunas  username, password os valores (os mesmos, porém, os que estão com o :)
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    //SQL INJECT -> é o bindParam vai verificar se a variável está "suja", então ele prepara o parâmetro para que o invasor não consiga apagar ou modificar dados do banco de dados no Formulário
?>