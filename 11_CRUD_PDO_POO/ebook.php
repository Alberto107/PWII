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

    public function inserir(){
        //inserindo ebooks no sistema
      }

      public function buscar($id){
        //buscar o ebook no sistema via id
      }

      public function buscarTodos(){
        //buscar tudo (sem ser especificado por id)
      }

      public function atualizar($id){
        //atualizar os ebooks via id
      }

      public function deletar($id){
        //deletar o ebook via id
      }
  }

?>