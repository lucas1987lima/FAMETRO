<?php
$nome= $_POST['nome'];
$sexo= $_POST['sexo'];
$idade= $_POST['idade'];

$camp strcomp ();
   
if($sexo == "M" && $idade < 25){
 echo $nome.", você foi ACEITA";
}
else{
 echo $nome.", você não foi ACEITA";
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