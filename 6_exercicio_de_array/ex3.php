<?php
//   Crie um array para a estrutura abaixo e exiba cada elemento utilizando foreach. Será necessário ter foreach encadeados (foreach dentro de foreach).
//   - Etec
//       - Desenvolvimento de Sistemas
//           - Programação Mobile
//               - Módulo I
//               - Módulo II
//           - Programação Web
//               - Módulo I
//               - Módulo II
//               - Módulo II
//               - Módulo IV
//           - Técnicas Avançadas de Programação de Algoritmos
//           - Inglês
//               - Módulo I
//               - Módulo II
//               - Módulo II
//       - Administração
//           - Recursos Humanos
//               - Módulo I
//               - Módulo II
//           - Gestão de Pessoas
//           - Teoria da Administração
//           - Inglês
//               - Módulo I


$escola_Etec = [
    [
        'nome_do_curso'
    ],
    [
        'nome_da_matéria' => 'Programação Mobile',
        'modulos' => 'I e II'
    ],
    [
        'nome_da_matéria' => 'Programação Web' ,
        'modulos' => 'I e II e III e IV'
    ],
    [
        'nome_da_matéria' => 'Técnicas avançadas de Programação de Algoritmos',
        'modulos' => ''
    ],
    [
        'nome_da_matéria' => 'Inglês',
        'modulos' => 'I e II e III'
    ],
    [
        'nome_do_curso' => 'Administração'
    ],
    [
        'nome_da_matéria' => 'Recursos Humanos',
        'modulos' => 'I e II'
    ],
    [
        'nome_da_matéria' => 'Gestão de pessoas',
        'modulos'
    ],
    [
        'nome_da_matéria' => 'Teoria da Administração',
        'modulos'
    ],
    [
        'nome_da_matéria' => 'Inglês',
        'modulos' => 'I apenas'
    ]
];


 foreach($escola_Etec as $key => $value){
    echo 'Nome do curso: ' . $value['nome_do_curso'] . '<br>';
    echo '<br>';
    echo 'Nome da matéria: ' . $value['nome_da_matéria'] . '<br>';
    echo '<br>';
    echo '<br>';
    echo 'Módulos: ' . $value['modulos'] . '<br>';
    echo '<br>';
   }
?>