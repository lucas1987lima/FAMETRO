<?php 
   if ($acao == 'verificar'){
     $triplo=($numero)*3;
     echo "<script>alert('O Triplo de $numero é $triplo!');location='exe02.php';</script>";
   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Digite um numero para saber seu triplo<p>
 Digite um Numero <input type="text" name="numero"><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
