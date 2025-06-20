<?php 
   if ($acao == 'verificar'){
     echo "N1 -> $n1 <br> N2 -> $n2 <br>N3 -> $n3";
	 if($n1>=$n2 && $n1>=$n3){
	  if ($n2>=$n3){
	   echo "<script>alert('N1 é MAIOR e N3 é MENOR!!!!');location='exe11.php';</script>";
	  }
	  else{
	   echo "<script>alert('N1 é MAIOR e N2 é MENOR!!!!');location='exe11.php';</script>";
	  }
	 }
	 else if($n2>=$n3 && $n2>=$n1){
	  if ($n3>=$n1){
	   echo "<script>alert('N2 é MAIOR e N1 é MENOR!!!!');location='exe11.php';</script>";
	  }
	  else{
	   echo "<script>alert('N2 é MAIOR e N3 é MENOR!!!!');location='exe11.php';</script>";
	  }
	 }
	 else if($n3>=$n1 && $n3>=$n2){
	  if ($n1>=$n2){
	   echo "<script>alert('N3 é MAIOR e N2 é MENOR!!!!');location='exe11.php';</script>";
	  }
	  else{
	   echo "<script>alert('N3 é MAIOR e N1 é MENOR!!!!');location='exe11.php';</script>";
	  }
	 }
	 


   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 QUAL É O MAIOR<p>
 Digite N1 <input type="text" name="n1"><br>
 Digite N2 <input type="text" name="n2"><br>
 Digite N3 <input type="text" name="n3"><br><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
