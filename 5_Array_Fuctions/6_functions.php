<?php
  
   $valor_1 = 10;
   $valor_2 = 20;
   $operador = '+';
   $GLOBALS['resultado'] = 0; //vai deixar para todos como GLOBAL porque terá que ser reconhecido em todo o código, se fosse só com variável simples a versão do HTML não aceitaria

   calcular($valor_1, $valor_2, $operador, $resultado);

   function calcular($valor_1, $valor_2, $operador, $resultado){
    
       if($operador == '+'){
        $GLOBALS['resultado'] = somar($valor_1, $valor_2);
       }
       if($operador == '-'){
        $GLOBALS['resultado'] = subtrair($valor_1, $valor_2);
       }
       if($operador == '/'){
        $GLOBALS['resultado'] = dividir($valor_1, $valor_2);
       }
       if($operador == '*'){
        $GLOBALS['resultado'] = multiplicar($valor_1, $valor_2);
       }

   }

   function somar($valor_1, $valor_2){

      //$resultado = $valor_1 + $valor_2;
      
      return $valor_1 + $valor_2; //vai retornar o cálculo para quem chamou a função

   }

   function subtrair($valor_1, $valor_2){

    return $valor_1 - $valor_2;

   }

   function dividir($valor_1, $valor_2){

    return $valor_1 / $valor_2;    

   }

   function multiplicar($valor_1, $valor_2){

    return $valor_1 * $valor_2;

   }

   echo $valor_1 . $operador . $valor_2 . ' = ' . $GLOBALS['resultado'];
?>