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

      public function inserir($nome,$email,$senha,$confirmar_senha, $tipo){
            global $pdo;//chamando o pdo de outra página, dentro de função tem que ser global, já fora não
            if($senha != $confirmar_senha)
              return 'As senhas não conferem!';

            if(empty($nome) || empty($email) || empty($senha) || empty($confirmar_senha))
              return 'Favor preencher todos os campos';
            //inserindo usuários no sistema
            $tipo = 'admin';
            //poseteriormente verificação se é admin ou não
            
            
        
            $stmt = $pdo->prepare("INSERT INTO /* tabela -> */usuario (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':tipo', $tipo);
            //se tiver "" ou () e não for o valor en si da variável ele bloqueia
            $stmt->execute();

            return 'Usuário cadastrado com sucesso!';
        
            
        }
        public function buscar($id){
          //buscar usuário no sistema via id
          $stmt = $pdo->query("SELECT * FROM usuario WHERE id = $id");
          $usuarios = $stmt->fetchAll();
        }

        public function buscarTodos(){
          //buscar tudo (sem ser especificado por id)
          $stmt = $pdo->query("SELECT * FROM usuario");
          $usuarios = $stmt->fetchAll();
        }

        public function atualizar($id, $nome, $email, $senha, $tipo){
          //atualizar os usuários via id

          $stmt = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha, tipo = :tipo WHERE id = :id");
          $stmt->bindParam(':nome', $nome);
          $stmt->bindParam(':email', $email);
          $stmt->bindParam(':senha', $senha);
          $stmt->bindParam(':tipo', $tipo);
          $stmt->bindParam(':id', $id);
          $stmt->execute();
        }

        public function login(){

        }

        public function logout(){

        }
   
        // $usuario1 = new Usuario('Alberto','etc','etc','etc');
      }




?>