<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="index.php" method="get">
        <fieldset>
        <legend>Informações do Personagem</legend>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Personagem" requiered>

        <br>

        <label for="poder">Poder</label>
        <input type="text" name="poder" id="poder" placeholder="Nome do Personagem" required>

        <input type="submit" value="Enviar">
        </fieldset>
       

    </form>

</body>
</html>
<?php
//VERIFICAÇÃO DE SEGURANÇA
   if(isset($_GET['nome']))
   {
    echo $_GET['nome'];  // ele só vai fazer o echo se a variável existir
    if(empty($_GET['nome']))
    {
        echo 'O nome é obrigatório!';
    }
    else
    {
        echo $_GET['nome'];
    }
   }
    
    //pode ser get ou post
    //if = é, estar set= definir --> isset = a variável existe?

    if(isset($_GET['poder']))
   {
    echo $_GET['poder'];  // ele só vai fazer o echo se a variável existir
    if(empty($_GET['poder']))
    {
        echo 'O poder é obrigatório!';
    }
    else
    {
        echo $_GET['poder'];
    }
   }
?>