<html>
<head>
<title> Enviando variaveis para outra p&aacute;gina </title>
</head>
<body onload="document.form1.n1.focus();" bgcolor="101010">
<div align="center"><b></b><h1><font color="#ffffff"> TRABALHANDO COM FORMULARIO E ARQUIVO</font></h1></b></div>
<br/><br/>
<table width="30%" align="center" border="1" bordercolor="yellow" bgcolor="red">
<tr>
<td>
<?php
echo "O valor digitado em N1 foi: ".$n1;
echo "<br/>";
echo "O valor digitado em N2 foi: " .$n2;
echo "<br/><br/>";

$soma = $n1 + $n2;
$sub  = $n1 - $n2;
$prod = $n1 * $n2;
$div  = $n1 / $n2;

echo "Resultado da Soma: " .$soma;
echo "<br/> Resultado da Subtracao: " .$sub;
echo "<br/> Resultado do Produto: " .$prod;
echo "<br/> Resultado da Divisao: " .$div;
echo "<br/><br/>";
echo "<a href='enviar.php'> Voltar </a>";
echo "<br/> <br/>";
echo "<input type='button' name='btv' value='Voltar' onclick=location='enviar.php'>"; //voltar co botao
// . (ponto) = concatenação / união 
?>
</td>
</tr>
</table>
</form>
</body>
</html>