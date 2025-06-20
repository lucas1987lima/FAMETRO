<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

if ($n3<=$n2){
 if ($n2<=$n1){
   $maior = $n1;
   echo "A variavel 'Maior' Recebeu: ".$maior;
 }
 else{
   $maior = $n2;
   echo "Maior Recebeu: ".$maior;
   
 }
}
else if ($n2<=$n1){
 if ($n1<=$n3){
   $maior = $n3;
   echo "Maior Recebeu: ".$maior;
 }
 else{
   $maior = $n1;
   echo "Maior Recebeu: ".$maior;
 }
}
else if ($n1<=$n3){
 if ($n3<=$n2){
   $maior = $n2;
   echo "Maior Recebeu: ".$maior;
 }
 else{
   $maior = $n3;
   echo "Maior Recebeu: ".$maior;
 }
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