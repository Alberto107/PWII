<?php
//Array reto (unidimensional)
  $lista_frutas = [];
//SHIFT ALT SETA PRA BAIXO
  $lista_frutas[0] = 'Banana';
  $lista_frutas[1] = 'Maçã';
  $lista_frutas[2] = 'Morango';
  $lista_frutas[3] = 'Uva';

  echo '<pre>'; 
  echo var_dump($lista_frutas);
  echo '</pre>'

  /*quando tem um loop dentro do outro seria uma matriz bidimensional, quando tem mais um loop dentro é 
  uma matriz tridimensional

  array sequencial = numeros
  array associacao = textos
  /*
?>