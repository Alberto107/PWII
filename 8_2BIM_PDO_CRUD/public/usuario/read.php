<?php 
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll(); //array com todos os usuários

    //verificar se existe o id
    //menssagem que vai aparecer quando deletar o id
    if( isset($_GET['id']) ){
        echo 'O id ' . $_GET['id'] . 'foi removido'
    }

    // echo "<pre>";
    // echo var_dump($usuarios);
?>
    <?php foreach ($usuarios as $index => $user) {?>
        <p> <!-- sempre get quando for link (a href) -->
           <strong>Nome da Heroína:</strong> <?php echo $user['username'];?>
            <a href="http://localhost/PWII/8_2BIM_PDO_CRUD/public/usuario/delete.php?id=<?php echo $user['id']; ?>">Remover</a> <!-- troca o nome do read por delete, em seguida ele vai pegar o id de cada um -->
           <a href="">Editar</a>
        </p>
        <hr>
  <?php  } ?>




