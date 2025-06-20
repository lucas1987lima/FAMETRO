<?php

$ano = $_POST['ano'];

 if ($ano > 2013 || $ano < 1913){
  echo "Ano invalido";
 }
 else{
  $idade = 2013 - $ano;
  echo "Sua idade é ".$idade." anos";
 }

?>
<html>
<head>
<title>exercicios</title>
</head>

<body>
<p>							
<a href="index.html">VOLTAR MENU</a><p>

</body>
</html>