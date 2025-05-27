<?php 
    include '../../config/connection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){ //se for um GET ele vem pra cá 

        $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if(empty($id)){
        echo "É necessário informar o código!!! <img src='https://teiaderenda.wordpress.com/wp-content/uploads/2012/10/point.jpeg' height='220px'> </img>";
        exit();
    }
       $stmt = $pdo->prepare('SELECT * usuario WHERE id = :id'); //where ele filtra os dados pra pegar só o que ele quer

       $stmt->bindParam(':id', $id); //insere os id em :id na linha acima
       
       $stmt->execute(); //executa a consulta que foi preparada

       $usuário = stmt->fetchAll(); //converte em array
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ //se for um POST ele vem pra cá

        $id = isset($_POST['id']) ? $_POST['id'] : exit();
        $username = isset($_POST['username']) ? $_POST['username'] : exit();
        $password = isset($_POST['password']) ? $_POST['password'] : exit();

        if(empty($id)){
            echo "É necessário informar o código!!! ";
            exit();
        }

        if(empty($username)){
            echo "É necessário informar o usuário!!! ";
            exit();
        }

        if(empty($password)){
            echo "É necessário informar a senha!!! ";
            exit();
        }

        //atualizando os dados
        $stmt = $pdo->prepare('UPDATE usuario SET username=:username, password=:password WHERE id=:id'); //vai atualizar a tabela usuarios os dados definidos na coluna :username onde id é igual :id
        $stmt->bindParam(':id', $id); //vai substituir o valor da variável do $id e vai substituir em quem é :id
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        Header("Location: read.php"); //volta rapidamente pra outra página 

    }



    

    
?>

<form action="create.php" method="POST"> <!-- //primeiro ele vai fazer um GET pra pegar o link da outra pagina e dps faz o POST apos apertar o botão -->
     <input type="hidden" name="" value=" <?php echo $usuario[0]["id"];?> "> <!-- input hidden é se for do tipo texto ele mostra o texto, se for hidden deixa escondido -->
    <label for="username">Nome de Usuário</label>
    <input type="text" name="username" id="username" value=" <?php echo $usuario[0]["username"];?> "> <!-- value é o texto que aparece na informação, vamos colocar para exibir o próprio nome, não é seguro usar com senha -->

    <br>

    <label for="password">Senha</label>
    <input type="password" name="password" id="password">

    <br>

    <button type="submit">Cadastrar</button>
    
</form>