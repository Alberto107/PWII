<?php 
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll(); //array com todos os usuários

    // echo "<pre>";
    // echo var_dump($usuarios);
?>
    <?php foreach ($usuarios as $index => $user) {?>
        <p>
           <strong>Nome da Heroína:</strong> <?php echo $user['username'];?>
           <a href="">Remover</a>
           <a href="">Editar</a>
        </p>
        <hr>
  <?php  } ?>




