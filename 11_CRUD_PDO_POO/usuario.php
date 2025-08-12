<?php

   class Usuario{
      private $id;
      private $nome;
      private $email;
      private $senha;
      private $tipo; // admin || comum

    public function __construct($nome, $email, $senha, $tipo){ //id não colocado por ser Primary Key Auto Increment
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;
      }

      public function inserir(){
        //inserindo usuários no sistema
      }

      public function buscar($id){
        //buscar usuário no sistema via id
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
      }

      public function atualizar($id){
        //atualizar os usuários via id
      }

      public function login(){

      }

      public function logout(){

      }
    }

    // $usuario1 = new Usuario('Alberto','etc','etc','etc');

?>