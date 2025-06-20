<?php
include("conexao.php");
$sql = mysql_query("SELECT * FROM tabalunos");

if ($acao == 'excluir')
{
$sql = mysql_query("DELETE FROM tabalunos
WHERE matricula = $matricula");

   if ($sql == 0)
   {
      echo "Falha na Exclusão";
   }
      else
      {
         echo "<script>alert('Exclusão realizada com sucesso!');</script>";
         echo "<script>location='listar.php';</script>";
      }
}
?>
<html>
<head>
<title>Listando Alunos</title>
</head>
<body>
<div align="center"> LISTANDO REGISTROS </div>
<table width="80%" align="center" border="1">
<tr>
<td align="center">MATR&Iacute;CULA</td>
<td align="center">NOME</td>
<td align="center">RG</td>
<td align="center">ALTERAR</td>
<td align="center">EXCLUIR</td>
</tr>
<?php
for ($i=0;$i<mysql_num_rows($sql);$i++) {
$mat_aluno = mysql_result($sql,$i,"matricula");
?>
<tr>
<td align="center"> <?php echo mysql_result($sql,$i,"matricula"); ?> </td>
<td align="center"> <?php echo mysql_result($sql,$i,"nome"); ?> </td>
<td align="center"> <?php echo mysql_result($sql,$i,"rg"); ?> </td>
<td align="center"> <a href="alterar.php?mat=<?php echo $mat_aluno; ?>"><img src="b_edit.png" border="0"></a></td>
<td align="center"> <a href="?acao=excluir&matricula=<?php echo $mat_aluno; ?>"> <img src="b_drop.png" border="0"> </a> </td>
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
