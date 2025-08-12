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

    public function inserir(){
        //inserindo autores no sistema
      }

      public function buscar($id){
        //buscar autores no sistema via id
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
      }

      public function atualizar($id){
        //atualizar os autores via id
      }

      public function deletar($id){
        //deletar o autor via id
      }
  }

?>