<?php
   session_start();
?>
<!-- testando para ver se de fato chama a session em um outra página -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <!-- verificar se o usuário está acessível -->
    <h1>O usuário <?php echo $_SESSION['email']; ?> está conectado!</h1>
</body>
</html>