<?php

  class Autor{
    private $id;
    private $nome;
    private $biografia; 
    private $foto;

    public function __construct($nome, $biografia, $foto){//id não colocado por ser Primary Key Auto Increment
        $this->nome = $nome;
        $this->biografia = $biografia;
        $this->foto = $foto;
    }

    public function inserir($nome,$biografia,$foto){
        //inserindo autores no sistema
      
          $stmt = $pdo->prepare("INSERT INTO /* tabela -> */autor (nome, biografia, foto) VALUES (:nome, :biografia, :foto)");
          $stmt->bindParam(':nome', $nome);
          $stmt->bindParam(':biografia', $biografia);
          $stmt->bindParam(':foto', $foto);
          //se tiver "" ou () e não for o valor em si da variável ele bloqueia
          $stmt->execute();
      
      }

      public function buscar($id){
        //buscar autores no sistema via id
        $stmt = $pdo->query("SELECT * FROM autor WHERE id = $id");
        $autores = $stmt->fetchAll();
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
        $stmt = $pdo->query("SELECT * FROM autor");
        $autores = $stmt->fetchAll();
      }

      public function atualizar($id, $nome, $biografia, $foto){
        //atualizar os autores via id
        $stmt = $pdo->prepare("UPDATE autor SET nome = :nome, biografia = :biografia, foto = :foto WHERE id = :id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':biografia', $biografia);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
      }

      public function deletar($id){
        //deletar o autor via id
        $stmt = $pdo->prepare('DELETE FROM autor WHERE id = :id');
        $stmt->bindParam(':id', $id);
            $stmt->execute();
      }
  }

?>