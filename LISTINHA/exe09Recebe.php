<?php
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];
 
 if ($n1 > $n2){
   $valor1 = sqrt($n1);
   $valor2 = pow ($n2,2);
   echo "N1 antes: ".$n1.", depois -> ".$valor1;
   echo "<br>N2 antes: ".$n2.", depois -> ".$valor2;
 }
 else if ($n1 < $n2){
   $valor2 = sqrt($n2);
   $valor1 = pow ($n1,2);
   echo "N1 antes: ".$n1.", depois -> ".$valor1;
   echo "<br>N2 antes: ".$n2.", depois -> ".$valor2;
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
