<?php 
    include '../../config/connection.php';

    //na outra página vai aprecer os ids que retiramos da página anterior
    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    //verificar se existe id (ou se está vazio)

    if(empty($id)){
        echo "É necessário informar o código!!! <img src='https://teiaderenda.wordpress.com/wp-content/uploads/2012/10/point.jpeg' height='220px'> </img>";
        //para ver é o escrever a seguinte URL http://localhost/PWII/8_2BIM_PDO_CRUD/public/usuario/delete.php?id=
        exit();
    }
    echo $id;

    $stmt = $pdo->prepare('DELETE FROM usuario WHERE id = :id');
    $stmt->bindParam(':id', $id); //verificar se a string existe (como se estivesse escondendo o comando dentro ds variável)
    $stmt->execute();//função de executar.
    //Header('Location: read.php'); //o HEADER redireciona para outra página
    Header("Location: read.php?id=$id");

    //vai sempre deletar o id ao invés do name pq o name pod eer nome repetido e o id é atributo chave
?>
