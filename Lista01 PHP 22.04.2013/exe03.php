<?php 
   if ($acao == 'verificar'){
     $calc=($numero)/3;
	 $terca=$numero-$calc;
     echo "<script>alert('A terça parte de $numero é $terca!');location='exe03.php';</script>";
   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Achar a Ter&ccedil;a parte de um numero<p>
 Digite um Numero <input type="text" name="numero"><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
