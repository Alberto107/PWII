<?php

  class Editora{
    private $id;
    private $nome;
    private $site; 
    private $email;

    public function __construct($nome, $biografia, $foto){//id não colocado por ser Primary Key Auto Increment
        $this->nome = $nome;
        $this->site = $site;
        $this->email = $email;
    }

    public function inserir($nome,$site,$email){
        //inserindo editoras no sistema

            $stmt = $pdo->prepare("INSERT INTO /* tabela -> */editora (nome, site, email) VALUES (:nome, :site, :email)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':site', $site);
            $stmt->bindParam(':email', $email);
            //se tiver "" ou () e não for o valor em si da variável ele bloqueia
            $stmt->execute();
        
            
        }
      }

      public function buscar($id){
        //buscar a editora no sistema via id
        $stmt = $pdo->query("SELECT * FROM editora WHERE id = $id");
        $editoras = $stmt->fetchAll();
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
        $stmt = $pdo->query("SELECT * FROM editora");
        $editoras = $stmt->fetchAll();
      }

      public function atualizar($id){
        //atualizar as editoras via id
      }

      public function deletar($id){
        //deletar a editora via id
        $stmt = $pdo->prepare('DELETE FROM editora WHERE id = :id');
        $stmt->bindParam(':id', $id);
            $stmt->execute();
      }
  }

?>