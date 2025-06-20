<html>
<head>
<title>...:STRTOUPPER:...</title>
</head>
<body>
<form name="formexe" method="post" action="?acao=verificar">
Digite seu nome completo: <input type="text" name="nome" id="nome" size="30" value="<?php echo $nome; ?>">
<br/>
<input type="submit" name="bt_enviar" id="bt_enviar" value="Verificar LETRAS">
</form>
<?php
if ($acao == verificar)
 {
  $str = $nome;
  echo "Total de Letras  ficaram em MAIUSCULOS: ". strtoupper($str);
 }
?>
</body>
</html>