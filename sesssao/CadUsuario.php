<?php
include ("conexao.php");
echo $login = $_POST['login'];
echo $senha = $_POST['senha'];
echo $nome = $_POST['nome'];

$sql = mysql_query ("insert into usuario(login,senha,nome) values ('$login','$senha','$nome')");
if ($sql == 1){
 echo "Cadastrado Com Sucesso!";
}
else{
 echo "ERRO AO CADASTRAR";
}
?>