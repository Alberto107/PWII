<?php

  class Categoria{
    private $id;
    private $nome;

    public function __construct($nome){//id não colocado por ser Primary Key Auto Increment
        $this->nome = $nome;
    }

    public function inserir($nome){
        //inserindo categorias no sistema
      
          $stmt = $pdo->prepare("INSERT INTO /* tabela -> */categoria (nome) VALUES (:nome)");
          $stmt->bindParam(':nome', $nome);
          //se tiver "" ou () e não for o valor em si da variável ele bloqueia
          $stmt->execute();
      
          
      }

      public function buscar($id){
        //buscar a categoria no sistema via id
        $stmt = $pdo->query("SELECT * FROM categoria WHERE id = $id");
        $categorias = $stmt->fetchAll();
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
        $stmt = $pdo->query("SELECT * FROM categoria");
        $categorias = $stmt->fetchAll();
      }

      public function atualizar($id){
        //atualizar as categorias via id
      }

      public function deletar($id){
        //deletar a categoria via id
        $stmt = $pdo->prepare('DELETE FROM categoria WHERE id = :id');
        $stmt->bindParam(':id', $id);
            $stmt->execute();
      }
  }

?>