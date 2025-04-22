<?php
// Configuração da conexão com BD
     $host = 'localhost'; //a URL do server
     $database = 'escola'; //nome do Banco de Dados
     $user = 'root'; //nome do usuário do servidor
     $password = '';

     //realizando conexão com o BD por meio do plugin PHP PDO


     //tipo um if else, tente fazer isso (try), caso contrário pegue (catch). 
     //e no parâmetro do catch é econtrar a excessão ou o erro que aconteceu no PDO e vai jogar na variável $erro
    
     try{
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8;", $user, $password); //o new cria um cópia do PDO e coloca na variável $pdo
     }catch(PDOException $erro){ //o getMessage é uma função dentro do PDO, fora outras funções escondidas >:)
        die('Erro na conexão: ' . $erro->getMessage()); //o die é como se fosse um echo seguido de um exit. Ou seja, ele exibe e para o programa
     }
     
     //o charset é os caracteres do HTML, sendo utf8
?>