<?php
//array associativo
     $pessoa = [
        'nome' =>'Amaurizin',
        'sobrenome' => 'Verdinho Marciano',
        'idade' => 60
    ];

    $funcionarios = [
        'pessoa1' => [
            'nome' => 'Hipaminondas',
            'sobrenome' => 'Silva',
            'idade' => 20
        ],
        'pessoa2' => [
            'nome' => 'Seleide',
            'sobrenome' => 'Silva',
            'idade' => 28
        ],
        'pessoa3' => [
            $pessoa
        ],
    ];

    echo '<pre>'; //visualiza o código
    echo var_dump($funcionarios);
    echo $funcionarios['pessoa1']['nome'];

    /**
     * se fosse numérico seria tudo em uma linha sem os =>
     */

    /* => ou : (em algumas liguagens) se diz que um está refereciando ou pertence a outro, 
    diferete de = que diz que um está atribuindo (está dentro) do outro. Esse é só em
    sequencial
    */
    
    //não pode ter um array com associativo e sequencial  juntos, ou é um ou é outro.
    
?>