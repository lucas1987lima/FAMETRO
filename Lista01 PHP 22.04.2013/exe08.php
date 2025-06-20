<?php 
   if ($acao == 'verificar'){
     
	 
	 
	 if ($idade >= 18 && $idade <= 65){
	  echo "<script>alert('VOCÊ É MAIOR DE IDADE!!!!');location='exe08.php';</script>";
	 }
	 if ($idade < 18){
	  echo "<script>alert('MENOR DE IDADE!!!!');location='exe08.php';</script>";
	 }
	 if ($idade > 65){
	  echo "<script>alert('MAIS DE 65 ANOS!!!!');location='exe08.php';</script>";
	 }

	 

   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Qual a sua idade?<p>
 Digite a sua idade<input type="text" name="idade">
 <p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
