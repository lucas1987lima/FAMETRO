<?php
include("conexao.php");
//Recebendo tudo o que foi digitado pelo usuario
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = mysql_query("INSERT INTO usuario VALUES($matricula,'$nome','$login','$senha');");

if($sql==1)
{
echo "<script>alert('Cadastro realizado com sucesso');</script>";
exit();
}
if(empty($matricula))
{
echo "<script>alert('Todos os campos com * devem ser preenchidos!!');history.back()</script>";

}//fim if
else if(empty($nome))
{
echo "<script>alert('Todos os campos com * devem ser preenchidos!!');history.back()</script>";

}//fim if
else if(empty($login))
{
echo "<script>alert('Todos os campos com * devem ser preenchidos!!');history.back()</script>";

}//fim if
else if(empty($senha))
{
echo "<script>alert('Todos os campos com * devem ser preenchidos!!');history.back()</script>";

}//fim if


?>