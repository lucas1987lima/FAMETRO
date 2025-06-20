<?php 
   if ($acao == 'verificar'){
     if ($numero % 5 == 0){
 	   echo "<script>alert('VERDADEIRO!!!!');location='exe04.php';</script>";
     }
	 else{
	   echo "<script>alert('FALSO!!!!');location='exe04.php';</script>";
	 }
   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Ver se &eacute; divis&iacute;vel por 5<p>
 Digite um Numero <input type="text" name="numero"><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
