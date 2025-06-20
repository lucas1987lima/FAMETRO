<?php
include ("conexao.php");

$nome = $_POST['usuario'];
$senha = $_POST['senha'];

//usuario valido
$nomeValido ="ronei";
$senhaValida="123";

$sql = mysql_query("select *from usuario where login='$nome' and senha='$senha'");
$result = mysql_num_rows($sql);

if($result ==1){
session_start();
$_SESSION['usuario'] = $nome;
$_SESSION['senha'] = $senha;
header("Location:site.php");
}else{

echo "<script>alert('Atenção! Usuario ou Senha invalidos');location='index.php'</script>";
echo "Usuario ou senha invalido";
}


?>
