<?php
//   Crie um array para um zoológico contendo informações como:
//     Nome do Animal, Raça, Espécie, Cor, Peso, Idade, Foto.
//     Exiba todos os animais utilizando um foreach.

  $animais = [
    [
        'nome' => '<i>Pongo pygmaeus<i/>',
        'raça' => ' ',
        'espécie' => '<i>Pongo<i/>',
        'cor' => 'laranja ruivo',
        'peso' => '70kg',
        'idade' => '5 anos',
        'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/OrangutanP1.jpg/330px-OrangutanP1.jpg'
    ], 
    [
        'nome' => '<i>Ornithorhynchus anatinus<i/>',
        'raça' => '',
        'espécie' => '<i>Ornithorhynchus<i/>',
        'cor' => 'marrom castanho',
        'peso' => '1kg',
        'idade' => '9 anos',
        'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Ornithorhynchus.jpg/420px-Ornithorhynchus.jpg'
    ],
    [
        'nome' => '<i>V.vulpes vulpes<i/>',
        'raça' => '',
        'espécie' => '<i>vulpes<i/>',
        'cor' => '',
        'peso' => '3 kg',
        'idade' => '2 anos',
        'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Georgian_white_Russian_domesticated_Red_Fox.jpg/420px-Georgian_white_Russian_domesticated_Red_Fox.jpg'
    ],
    [
        'nome' => '<i>Canis lupus familiaris<i/>',
        'raça' => 'Chihauha',
        'espécie' => '<i>C. Lupus<i/>',
        'cor' => 'laranja',
        'peso' => '2kg',
        'idade' => '6 anos',
        'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Babylone_3ans1.jpg/330px-Babylone_3ans1.jpg'
    ]
    ];

    foreach($animais as $key => $value){
        echo 'Nome: ' . $value['nome'] . '<br>';
        echo '<br>';
        echo 'Raça: ' . $value['raça'] . '<br>';
        echo '<br>';
        echo 'Espécie: ' . $value['espécie']. '<br>';
        echo '<br>';
        echo 'Cor: ' . $value['cor'] . '<br>';
        echo '<br>';
        echo 'Peso: ' . $value['peso'] . '<br>';
        echo '<br>';
        echo 'Idade: ' . $value['idade'] . '<br>';
        echo '<br>';
        echo  'Imagem: ' . '<img src=" '. $value['foto'] . ' "<br>';
        echo '<br>';
      }
?>