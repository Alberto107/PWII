<?php
 /**
  * Crie um Array no qual irá conter 3 pessoas (nome, idade).
  * Faça um foreach para exibir cada uma das pessoas, e exiba
  * se a pessoa pode votar ou não.
  * idade menor que 16 não pode votar
  * idade entre 18 e 70 obrigatório
  * idade maior que 70 voto opcional
  */


  $pessoas = [
    [
       'nome' => 'Flávio',
       'idade' => 5
    ],
    [
        'nome' => 'Jucilielson',
        'idade' => 17
    ],
    [
        'nome' => 'Jusé',
        'idade' => 79
    ]
  ];

  foreach ($pessoas as $key => $value) {

   if($value['idade'] < 16){
       echo  $value['nome'] . ' Não pode votar <br>';
   }else if($value['idade'] >= 18 && $value['idade'] <= 70){
       echo  $value['nome'] . ' Tem que votar <br>';
   }else{
       echo  $value['nome'] . ' Opcional votar <br>';
   }

  }
?>