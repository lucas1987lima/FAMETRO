<?php
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];
 
 if ($n1 > $n2){
   echo "N1 Maior -> ".$n1;
 }
 else if ($n1 < $n2){
  echo "N2 Maior -> ".$n2;
 }
 else {
  echo "SAO IGUAIS N1".$n1." e N2".$n2; 
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
