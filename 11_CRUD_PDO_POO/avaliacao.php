<?php

  class Avaliacao{
    private $id;
    private $nota;
    private $comentario;
    private $data;

    public function __construct($nota,$comentario,$data){//id não colocado por ser Primary Key Auto Increment
        $this->nota = $nota;
        $this->comentario = $comentario;
        $this->data = $data;
    }

    public function inserir($nota,$comentario,$data){
        //inserindo avaliações no sistema
          
          $stmt = $pdo->prepare("INSERT INTO /* tabela -> */avaliacao (nota, comentario, data) VALUES (:nota, :comentario, :data)");
          $stmt->bindParam(':nota', $nota);
          $stmt->bindParam(':comentario', $comentario);
          $stmt->bindParam(':data', $data);
          //se tiver "" ou () e não for o valor em si da variável ele bloqueia
          $stmt->execute();
      }

      public function buscar($id){
        //buscar a avaliação no sistema via id
        $stmt = $pdo->query("SELECT * FROM avaliacao WHERE id = $id");
        $avaliacoes = $stmt->fetchAll();
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
        $stmt = $pdo->query("SELECT * FROM avaliacao");
        $avaliacoes = $stmt->fetchAll();
      }

      public function atualizar($id, $nota, $comentario, $data){
        //atualizar as avaliações via id
        $stmt = $pdo->prepare("UPDATE avaliacao SET nota = :nota, comentario = :comentario, data = :data WHERE id = :id");
        $stmt->bindParam(':nota', $nota);
        $stmt->bindParam(':comentario', $comentario);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
      }

      public function deletar($id){
        //deletar a avaliação via id
        $stmt = $pdo->prepare('DELETE FROM avaliacao WHERE id = :id');
        $stmt->bindParam(':id', $id);
            $stmt->execute();
      }
  }

?>