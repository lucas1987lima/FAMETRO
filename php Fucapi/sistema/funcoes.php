<?php
//funçoes.php SALVAR DENTRODA PASTA SISTEMA
/* Este exemplo mostra a utilizacao de funçoes em php.
neste exemplo vamos criar a função somar que efetuara a soma de n1+n2
DICA: EM PHP, assim como em C não existe procedure
*/

function somar ($n1,$n2) // n1 e n2 sao os parametros da funcao
{
  $total = $n1 + $n2; //total e uma var local
  return $total;  //return retorna o resultado p/quem chamou a função
}
?>
<html>
<head>
<title> FUN&Ccedil;&Atilde;O </title>
</head>
<body onload="document.form1.n1.focus();" bgcolor="FFFFFF">
<div align="center"><b></b><h1><font color=" #FF1493">TRABALHANDO COM FUN&Ccedil;&Atilde;O</font></h1></b></div>
<br/><br/>
<form name="form1" method="post" action="?acao=calcular">
<table width="24%" align="center" border="1" bordercolor="#FF1493" bgcolor="purple">
<tr>
 <td> 
  <font color="#FFFFFF"><b> Digite N1</b> </font><input type="text" name="n1" id="n1" size="4"> <br/>
 <font color="#FFFFFF"> <b> Digite N2</b></font> <input type="text" name="n2" id="n2" size="4"> <br/>
  <input type="submit" name="bgcalc" value="Calcular">
 </td>
</tr>
</table>
</BR>
<table width="24%" align="center" border="1" bordercolor="#FF1493" bgcolor="purple">
<tr>
 <td> 
<?php
if ($acao == 'calcular')
{
 echo "<font color='#FFFFFF'>Resultado = ". somar ($n1,$n2),    "</font>";  
 echo "<br/>";
 echo "Resultado do cubo =".cubo($n1);
}

?>
 </td>
 </tr>
 </table>
</form>
</body>
</html>