<html>
<head>
<title>...:STRTOLOWER:...</title>
</head>
<body>
<form name="formexe" method="post" action="?acao=verificar">
Digite seu nome completo: <input type="text" name="nome" id="nome" size="50" value="<?php echo $nome; ?>">
<br/>
<input type="submit" name="bt_enviar" id="bt_enviar" value="Verificar LETRAS">
</form>
<?php
if ($acao == verificar)
 {
  $str = $nome;
  echo "Todas as letras ficaram em minusculo : ". strtolower($str);
 }
?>
</body>
</html>