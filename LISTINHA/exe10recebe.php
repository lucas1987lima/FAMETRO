<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

if ($n3<=$n2){
 if ($n2<=$n1){
   echo "N1 � o maior: ".$n1;
 }
 else{
   echo "N2 � o maior: ".$n2;
   
 }
}
else if ($n2<=$n1){
 if ($n1<=$n3){
   echo "N3 � o maior: ".$n3;
 }
 else{
   echo "N1 � o maior: ".$n1;
 }
}
else if ($n1<=$n3){
 if ($n3<=$n2){
   echo "N2 � o maior: ".$n2;
 }
 else{
   echo "N3 � o maior: ".$n3;
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