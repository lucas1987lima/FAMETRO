<?php
include("conexao.php");

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

 $sql = mysql_query("insert into tabusuario (matricula,nome,login,senha) Values ($matricula,'$nome','$login','$senha')");

  if ($sql == 0)
   {
      echo "<script>alert('ERRO! Falha na Inserção!');location='cadastro.php';</script>";
   }
   else
     {
       echo "<script>alert('OK! Cadastro com Sucesso!');location='cadastro.php';</script>";
	   
     }
	

?>
