<?php
$valor = $_POST['valor'];

if ($valor < 20){
$lucro = $valor - ($valor * (45/100));
 echo "Lucro de 45%<br>Valor do produto: R$".$valor."<br> Lucro: R$".$lucro;
}
else{
 $lucro = $valor - ($valor * (30/100));
 echo "Lucro de 30%<br>Valor do produto: R$".$valor."<br> Lucro: R$".$lucro;
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