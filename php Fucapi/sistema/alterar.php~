<?php
include("conexao.php");
if ($acao == 'alterar')
{
 $query = mysql_query("UPDATE tabalunos SET
 nome = '$nome_aluno',
 rg   = '$rg_aluno'
 WHERE matricula = $mat_aluno");
 /*
 Após o último campo a ser alterado, ou seja, antes
 da clásula WHERE não tem vírgula
 */
 if ($query == 0)
 {
   echo "<script>alert('ERRO NA ALTERAÇÃO');</script>";
   echo "<script>location='listar.php';</script>";
 }
 else
 {
   echo "<script>alert('ALTERAÇÃO REALIZADA COM SUCESSO!');</script>";
   echo "<script>location='listar.php';</script>";
 } //fechando o else
}//fechando o if da acao = alterar
$sql = mysql_query("SELECT * FROM tabalunos
WHERE matricula = $mat");
$vetor = mysql_fetch_array($sql);
/*
A função mysql_fetch_array cria um vetor(array) com os
dados obtidos da query sql enviada ao banco de dados
pela função mysql_query.
Para utilizar o vetor, digite entre colchetes o nome
do campo a imprimir, exemplo: echo $vetor['nome']
*/
?>
<html>
<head>
<title>Alterar Dados de Alunos</title>
</head>
<body>
<form name="formcad" method="post" action="?acao=alterar">
<table width="50%" align="center" border="1">
<tr>
<td align="center" colspan="2">ALTERA&Ccedil;&Atilde;O DE DADOS DE ALUNOS</td>
</tr>
<tr>
<td>MATRICULA</td>
<td>  <?php echo $vetor['matricula'];?>  <input type="hidden" name="mat_aluno"  value="<?php echo $vetor['matricula'];?>" id="mat_aluno" size="9"></td>
</tr>
<tr>
<td>NOME</td>
<td><input type="text" name="nome_aluno" value="<?php echo $vetor['nome'];?>" id="nome_aluno" size="20"></td>
</tr>
<tr>
<td>RG</td>
<td><input type="text" name="rg_aluno" value="<?php echo $vetor['rg'];?>" id="rg_aluno" size="12"></td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="bts" value="ALTERAR">
<input type="button" name="btv" value="VOLTAR" onclick="location='menu.php'">
</td>
</tr>
</table>
</form>
</body>
</html>
