<?php
$idade = $_POST['idade'];

if ($idade < 5){
 echo "Sem categoria";
}
if ($idade >= 5 && $idade <=7){
 echo "Sua Categoria �: Infantil A";
}
if ($idade >= 8 && $idade <=10){
 echo "Sua Categoria �: Infantil B";
}
if ($idade >= 11 && $idade <=13){
 echo "Sua Categoria �: Juvenil A";
}
if ($idade >= 14 && $idade <=17){
 echo "Sua Categoria �: Juvenil B";
}
if ($idade >= 18){
 echo "Sua Categoria � S�nior";
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