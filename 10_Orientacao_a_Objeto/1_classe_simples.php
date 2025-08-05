<?
 //Pascal Case (letra maiúscula)

 class Pessoa{
    //public -> A variável está acessível externamente (somente fora do escopo do comando [bloco de código])
    //private -> A variável está restrita ao escopo do bloco, geralmente usada para obrigar a passar por processos no escopo da class
    //protected -> A variável só está acessivel através de herança
    public $nome;
    public $idade;

    public function Apresentar(){
        echo "A pessoa $this->nome diz Olá";
    }
 }

 //instância
 $aluno = new Pessoa();

 $aluno->nome = "Gengivildo"; //object operator
 $aluno->idade = 20;

 $aluno2 = new Pessoa();
 $aluno->nome = "Testonildo";
 $aluno2->idade = 18;

 echo '<pre>';
 print_r($aluno); //exibir o objeto, daria pra fazer com vardump
 print_r($aluno2);
?>