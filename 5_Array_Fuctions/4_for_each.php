<?php
   
   $alunos = [
     [
        'nome' => 'Marquitos',
        'nota' => 5
     ],
     [
         'nome' => 'Jucilielson',
         'nota' => 10
     ]
   ];

   foreach ($alunos as $key => $value) {

    if($value['nota'] < 7){
        echo 'Aluno ' . $value['nome'] . ' Reprovado <br>';
    }else{
        echo 'Aluno ' . $value['nome'] . ' Aprovado <br>';
    }

   }

?>