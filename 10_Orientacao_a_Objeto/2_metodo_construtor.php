<?
 //Pascal Case (letra maiúscula)

 class Pessoa{
    //public -> A variável está acessível externamente (somente fora do escopo do comando [bloco de código])
    //private -> A variável está restrita ao escopo do bloco, geralmente usada para obrigar a passar por processos no escopo da class
    //protected -> A variável só está acessivel através de herança
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        //do parâmetro joga para o this que vai pro public fora da function
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function Apresentar(){
        echo "A pessoa $this->nome diz Olá";
    }
 }

 
 $aluno = new Pessoa("Gengivildo", 20);

 $aluno2 = new Pessoa("Barrildo", 16);

 echo '<pre>';
 print_r($aluno); //exibir o objeto, daria pra fazer com vardump
 print_r($aluno2);
?>