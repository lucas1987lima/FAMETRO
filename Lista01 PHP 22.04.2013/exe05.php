<?php 
   if ($acao == 'verificar'){
     if ($numero % 3 == 0){
 	   echo "<script>alert('é múltiplo de 3!!!!');location='exe05.php';</script>";
     }
	 else{
	   echo "<script>alert('não é múltiplo de 3!!!!');location='exe05.php';</script>";
	 }
   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Ver se &eacute; multiplo de 3<p>
 Digite um Numero <input type="text" name="numero"><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
