<?php 
   if ($acao == 'verificar'){
     $media=($idade01+$idade02+$idade03)/3;
     echo "<script>alert('A Idade Média é! $media');location='exe01.php';</script>";
   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 Digite 3 idades para saber a Media<p>
 Idade 01: <input type="text" name="idade01"><br>
 Idade 02: <input type="text" name="idade02"><br>
 Idade 03: <input type="text" name="idade03"><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
