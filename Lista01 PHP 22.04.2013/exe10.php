<?php 
   if ($acao == 'verificar'){
     
	  $i=0;
	  
	  while ($i<=10){
	   $calc=$numero*$i;
	   echo "$numero X $i = $calc <br>";
	   $i= $i+1;
	  
	  }
	 
	  echo "<script>alert('LIMPAR TELA!!!!');location='exe10.php';</script>";
	 

	 

   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 TABUADA<p>
 Digite um numero<input type="text" name="numero">
 <p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
