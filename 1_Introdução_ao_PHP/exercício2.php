<?php
 //Crie um script que irá receber uma idade e exiba se é: 
 //criança, adolescente, adulto e idoso

 $idade = 15;

 if($idade >= 3 && $idade < 14){
    echo "Criança";
 }else if($idade >= 14 && $idade < 18){
    echo "Adolescente";
 }else if($idade >= 18 && $idade < 60){
    echo "Adulto";
 }else{
echo "Idoso";
 }

?>