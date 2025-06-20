<?php
include("conexao.php");
$sql = mysql_query("SELECT * FROM tabalunos order by nome");

if ($acao == 'pesquisar')
{
 $sql = mysql_query("SELECT * FROM tabalunos WHERE nome LIKE '%$nomepesq%'");
}

?>
<html>
<head>
<title>Pesquisa de Alunos</title>
</head>
<body onload="document.formpesq.nomepesq.focus();">
<form name="formpesq" method="post" action="?acao=pesquisar">
<div align="center">
Nome a ser Pesquisado <input type="text" name="nomepesq" id="nomepesq" size="15">
<input type="submit" name="btpesq" value="PESQUISAR">
</div>
</form>
<br/><br/>
<div align="center"> LISTANDO REGISTROS </div>
<table width="80%" align="center" border="1">
<tr>
<td align="center">MATR&Iacute;CULA</td>
<td align="center">NOME</td>  
<td align="center">RG</td>
</tr>
<?php
for ($i=0;$i<mysql_num_rows($sql);$i++) {
$mat_aluno = mysql_result($sql,$i,"matricula");
?>
<tr>
<td align="center"> <?php echo mysql_result($sql,$i,"matricula"); ?> </td>
<td align="center"> <?php echo mysql_result($sql,$i,"nome"); ?> </td>
<td align="center"> <?php echo mysql_result($sql,$i,"rg"); ?> </td>
</tr>
<?php
 } // fechando o for
?>
</table>
<br/>
<center>
<input type="button" name="btv" value="VOLTAR" onclick="location='menu.php'">
</center>
</body>
</html>
