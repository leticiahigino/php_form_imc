<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];

  
  $media = ($num1 + $num2 )/2;
  
  echo "<p>Média: $media </p>";
  if($media < 4.0) {

    $mensagem = "Reprovado";
    
    }else if(($media > 4.0) and ($media < 6.0)) {
    
    $mesagem = "Exame final";
    
    }else if (($media > 6.0)) {
    
    $mesagem = "aprovado";
    }
    echo "<p>$mesagem</p>";

  ?>
 
 
    
    
</body>
</html>