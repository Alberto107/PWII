<?

class Pessoa{
    public $nome;
    public $email;
}

class Aluno extends Pessoa{
    public $rm;
}

class Professor extends Pessoa{
    public $formacao;
    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
}

//PHP não aceita mais de uma herança, pode-se usar traits ou uma classe herdando a outra e a última herdando todas

$aluno = new Aluno();
$aluno->nome = 'Seleide';
$aluno->email = 'se@hotmail.com';

$professor = new Professor('Carlitos', 'ca@hotmail.com', 'ADS');



?>