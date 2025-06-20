<?php
$salario = $_POST['sal'];

if ($salario <= 600){
 echo "Isento de Desconto <br><br> Salario antigo: R$".$salario." Salario Atual: R$".$salario;
}
if ($salario > 600 && $salario <1200){
 $ajuste = $salario - ($salario* (20/100));
 echo "Desconto de 20% <br><br> Salario antigo: R$".$salario." Salario Atual: R$".$ajuste;
}
if ($salario >= 1200 && $salario <=2000){
 $ajuste = $salario - ($salario* (25/100));
 echo "Desconto de 25% <br><br> Salario antigo: R$".$salario." Salario Atual: R$".$ajuste;
}
if ($salario > 2000){
 $ajuste = $salario - ($salario* (30/100));
 echo "Desconto de 30% <br><br> Salario antigo: R$".$salario." Salario Atual: R$".$ajuste;
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