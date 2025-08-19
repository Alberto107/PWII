<?php

  class Ebook{
    private $id;
    private $titulo;
    private $descricao;
    private $isbn;
    private $data_publicacao;
    private $preco;
    private $idioma;
    private $foto;

    // Foreign Keys
    // id_autor
    // id_editora
    // id_categoria

    public function __construct($titulo,$descricao,$isbn,$data_publicacao,$preco,$idioma,$foto){//id não colocado por ser Primary Key Auto Increment
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->isbn = $isbn;
        $this->data_publicacao = $data_publicacao;
        $this->preco = $preco;
        $this->idioma = $idioma;
        $this->foto = $foto;
    }

    public function inserir($titulo,$descricao,$isbn,$data_publicacao,$preco,$idioma,$foto){
        //inserindo ebooks no sistema
        
            $stmt = $pdo->prepare("INSERT INTO /* tabela -> */ebook (titulo, descricao, isbn, data_publicacao, preco, idioma, foto) VALUES (:titulo, :descricao, :isbn, :data_publicacao, :preco, :idioma, :foto)");
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':data_publicacao', $data_publicacao);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':idioma', $idioma);
            $stmt->bindParam(':foto', $foto);
            //se tiver "" ou () e não for o valor em si da variável ele bloqueia
            $stmt->execute();
        
            
        }
      }

      public function buscar($id){
        //buscar o ebook no sistema via id
        $stmt = $pdo->query("SELECT * FROM ebook WHERE id = $id");
        $ebooks = $stmt->fetchAll();
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
        $stmt = $pdo->query("SELECT * FROM ebook");
        $ebooks = $stmt->fetchAll();
      }

      public function atualizar($id){
        //atualizar os ebooks via id
      }

      public function deletar($id){
        //deletar o ebook via id
        $stmt = $pdo->prepare('DELETE FROM ebook WHERE id = :id');
        $stmt->bindParam(':id', $id);
            $stmt->execute();
      }
  }

?>