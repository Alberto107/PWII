<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="get">
        <fieldset>
        <legend>Calculadora Científica</legend>
        <label for="valor1">Valor1</label>
        <input type="number" name="valor1" id="valor1" placeholder="0" requiered>

        <br>

        <label for="valor2">Valor2</label>
        <input type="number" name="valor2" id="valor2" placeholder="0" required>

        <br>

        <input type="submit" name="somar" value="+">
        <input type="submit" name="subtrair" value="-">
        <input type="submit" name="multiplicar" value="*">
        <input type="submit" name="dividir" value="/">
        </fieldset>
       

    </form>


</body>
</html>
<?php
//VERIFICAÇÃO DE SEGURANÇA
   if(isset($_GET['valor1']))
   {
    echo $_GET['valor1'];  // ele só vai fazer o echo se a variável existir
    if(empty($_GET['valor1']))
    {
        echo 'O valor1 é obrigatório!';
        exit();//o exit é para parar o código para não continuar calculando
    }
   } else{
     exit(); //ele para, pq se a variável n existe n continua
   }
    
    //pode ser get ou post
    //if = é, estar set= definir --> isset = a variável existe?

    if(isset($_GET['valor2']))
   {
    echo $_GET['valor2'];  // ele só vai fazer o echo se a variável existir
    if(empty($_GET['valor2']))
    {
        echo 'O valor2 é obrigatório!';
        exit();//o exit é para parar o código para não continuar calculando
    }
   }else{
    exit();//ele para, pq se a variável n existe n continua
   }       

   echo $_GET['valor1'] + $_GET['valor2'];

   if(isset($_GET['somar']))
   echo $_GET['valor1'] + $_GET['valor2'];

   if(isset($_GET['subtrair']))
   echo $_GET['valor1'] - $_GET['valor2'];

   if(isset($_GET['dividir']))
   echo $_GET['valor1'] / $_GET['valor2'];

   if(isset($_GET['multiplicar']))
   echo $_GET['valor1'] * $_GET['valor2'];
?>