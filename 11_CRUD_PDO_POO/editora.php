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

    public function inserir(){
        //inserindo editoras no sistema
      }

      public function buscar($id){
        //buscar a editora no sistema via id
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
      }

      public function atualizar($id){
        //atualizar as editoras via id
      }

      public function deletar($id){
        //deletar a editora via id
      }
  }

?>