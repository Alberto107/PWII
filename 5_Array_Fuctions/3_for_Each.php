<?php
   
   $veiculos = [
        'Fusca',
        'Ferrari',
        'Uno'
   ];


   foreach ($veiculos as $key => $value) { //key indice (posições do array)
    echo 'Chave: ' . $key . '<br>';        //para cada item ele vai repetir 3 vezes (os três índices)
    echo 'Veículo: ' . $value . '<br>';        //value é o valor, ou seja os textos dentro do array
   }

  $estacionameto = [
     [
        'nome' => 'Fusca',
        'placa' => 'abc123',
        'foto' => 'https://www.despachantedok.com.br/blog/wp-content/uploads/2022/04/25_capa-seo.png',
     ],
     [
        'nome' => 'Uno',
        'placa' => 'yxz321',
        'foto' => 'https://i0.wp.com/thegarage.com.br/wp-content/uploads/2023/02/1968-VW-Fusca-1300-a-venda-the-garage-33.jpg?ssl=1',
     ]
  ];

  echo '<h1>Estacionamento Batida Feliz</h1>';
  //forech um dentro do outro, um pra o estacionamento e o outro para o veículo
  foreach ($estacionameto as $key => $veiculo) { //pegou os dois do estacionamento e atribuiu para $veiculo
    echo 'Veículo: ' . $veiculo['nome'] . '<br>';
    echo 'Placa: ' . $veiculo['placa'] . '<br>';
    echo '<img src=" '. $veiculo['foto'] . ' "<br>'; //o foreach n precisa do contador++, ele faz por si só
  }

  //o foreach percorreu o primeiro objeto Fusca e depois foi para o Uno e em seguida apresentou os dois.

   /* pode se usar com while ou for ou foreach
   WHILE -> 
   
   */
?>