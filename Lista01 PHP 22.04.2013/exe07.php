<?php 
   if ($acao == 'verificar'){
     
	 
	 
	 if ($estado == "OU"){
	  echo "<script>alert('OUTROS!!!!');location='exe07.php';</script>";
	 }
	 if ($estado == "RJ"){
	  echo "<script>alert('CARIOCA!!!!');location='exe07.php';</script>";
	 }
	 if ($estado == "SP"){
	  echo "<script>alert('PAULISTA!!!!');location='exe07.php';</script>";
	 }
	 if ($estado == "AM"){
	  echo "<script>alert('AMAZONENSE!!!!');location='exe07.php';</script>";
	 }
	 

   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Qual a seu estado?<p>
 <select name="estado">
   <option value="OU">OUTROS</option>
   <option value="RJ">CARIOCA</option>
   <option value="SP">PAULISTA</option>
   <option value="AM">AMAZONENSE</option>
 </select>
 <p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
