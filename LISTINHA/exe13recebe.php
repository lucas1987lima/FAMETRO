<?php
$idade = $_POST['idade'];

if ($idade < 18){
 echo "Voce tem menos de 18 anos";
}
else if ($idade >= 18 && $idade <=65){
 echo "Voce tem mais de 18 ou ate 65 anos";
}
else{
 echo "Voce tem mais de 65 anos";
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