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

    public function inserir(){
        //inserindo avaliações no sistema
      }

      public function buscar($id){
        //buscar a avaliação no sistema via id
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
      }

      public function atualizar($id){
        //atualizar as avaliações via id
      }

      public function deletar($id){
        //deletar a avaliação via id
      }
  }

?>