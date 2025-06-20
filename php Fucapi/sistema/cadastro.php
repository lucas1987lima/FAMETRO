<?php
include("conexao.php");
include("biblioteca.php");
if ($acao == 'salvar')
{
   $novoid = UltimoIDAluno() + 1;

   $nomeMaiusc = strtoupper($nome_aluno);
   
   $totalRG = strlen($rg_aluno);
   if ($totalRG > 6)
   {
   echo "<script>alert('RG Não pode ser maior que 6.');</script>";
   echo "<script>location='cadastro.php';</script>";
   exit; //frear, parar
   }
   
   $sql = mysql_query("INSERT INTO tabalunos
   (id, matricula, nome,rg)
   VALUES
   ($novoid, $mat_aluno, '$nomeMaiusc','$rg_aluno')");
   if ($sql == 0)
   {
      echo "ERRO! Falha na Inserção!";
   }
     else
     {
       echo "OK! Cadastro com Sucesso!";
     }
}//fechando o if da acao = salvar
?>
<html>
<head>
<title>Cadastro de Alunos</title>
</head>
<body>

<form name="formcad" method="post" action="?acao=salvar">
<table width="50%" align="center" border="1">
<tr>
<td align="center" colspan="2">CADASTRO DE ALUNOS</td>
</tr>
<tr>
<td>MATRICULA</td>
<td><input type="text" name="mat_aluno" id="mat_aluno" size="9"></td>
</tr>
<tr>
<td>NOME</td>
<td><input type="text" name="nome_aluno" id="nome_aluno" size="20"></td>
</tr>
<tr>
<td>RG</td>
<td><input type="text" name="rg_aluno" id="rg_aluno" size="12"></td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="bts" value="SALVAR">
<input type="button" name="btv" value="VOLTAR" onclick="location='menu.php'">
</td>
</tr>
</table>
</form>
</body>
</html>
