<?php
$idade = $_POST['idade'];

if ($idade < 5){
 echo "Sem categoria";
}
if ($idade >= 5 && $idade <=7){
 echo "Sua Categoria é: Infantil A";
}
if ($idade >= 8 && $idade <=10){
 echo "Sua Categoria é: Infantil B";
}
if ($idade >= 11 && $idade <=13){
 echo "Sua Categoria é: Juvenil A";
}
if ($idade >= 14 && $idade <=17){
 echo "Sua Categoria é: Juvenil B";
}
if ($idade >= 18){
 echo "Sua Categoria é Sênior";
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