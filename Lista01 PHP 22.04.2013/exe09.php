<?php 
   if ($acao == 'verificar'){
     
    $i =10;
	 while ($i<=1000){
      echo "$i ";
	  $i = $i+10;
     }
     echo "<script>alert('LIMPAR TELA!!!!');location='exe09.php';</script>";
   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Pressione o Botão
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
