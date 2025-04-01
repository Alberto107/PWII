<?php
 //Crie um Array contendo 4 alunos com: nome, rm, foto, telefone. 
 //exiba todos os alunos utilizando um foreach

  $pessoas = [
    [
        'nome' => 'minichef_Afonso',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ-TIDyrK__Myvp1WtXnAF8orCsEwLYCZFLg&s',
        'RM' => '15754545',
        'telefone' => '(15)998765123'
    ],
    [
        'nome' => 'Amauri',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShq4BcLWkkhvy7jskP9gKl1j8nGXMbBdvfcA&s',
        'RM' => '6669976',
        'telefone' => '(01)99876532'
    ],
    [
        'nome' => 'Panthera Léo Léo',
        'foto' => 'https://www.petz.com.br/blog/wp-content/uploads/2024/04/tipos-de-ouricos-topo.jpg',
        'RM' => '3231524132',
        'telefone' => '(81)765433'
    ],
    [
         'nome' => 'Agostinho_Carrara',
         'foto' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSQsIkSOLwEvkwtILRmYt7eJEAXC5ygkx1Eajs1ueu6q3oqoW0PbzZ9y7V8adz97jYKFy_RXbSAW0NeE05GZ-OifMVSLZz2aQytbr48-MNp7w',
         'RM' => '120203045',
         'telefone' => '(007) 7652412'
    ]
    ];

  foreach($pessoas as $key => $value){
    echo 'Nome: ' . $value['nome'] . '<br>';
    echo '<br>';
    echo 'RM: ' . $value['RM'] . '<br>';
    echo '<br>';
    echo 'Telefone: ' . $value['telefone']. '<br>';
    echo '<br>';
    echo  'Imagem: ' . '<img src=" '. $value['foto'] . ' "<br>';
    echo '<br>';
  }

?>