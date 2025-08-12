<?php

  class Categoria{
    private $id;
    private $nome;

    public function __construct($nome){//id não colocado por ser Primary Key Auto Increment
        $this->nome = $nome;
    }

    public function inserir(){
        //inserindo categorias no sistema
      }

      public function buscar($id){
        //buscar a categoria no sistema via id
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
      }

      public function atualizar($id){
        //atualizar as categorias via id
      }

      public function deletar($id){
        //deletar a categoria via id
      }
  }

?>