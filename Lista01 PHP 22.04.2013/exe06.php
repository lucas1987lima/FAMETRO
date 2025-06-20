<?php 
   if ($acao == 'verificar'){
     
	 if ($nasc > $ano ){
	  echo "<script>alert('INCORRETO - - - DIGITE UM ANO VALIDO!!!!');location='exe06.php';</script>";
	 }
	 if ($nasc == $ano ){
	  echo "<script>alert('VOCÊ É UM RECEM NASCIDO!!!!');location='exe06.php';</script>";
	 }
	 else{
	  $idade=$ano-$nasc; 
	 echo "<script>alert('SUA IDADE É $idade!!!!');location='exe06.php';</script>";
	 }

   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Qual a sua Idade?<p>
 Digite seu ANO de Nascimento <input type="text" name="nasc"><br>
 Digite o ANO ATUAL <input type="text" name="ano"><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
