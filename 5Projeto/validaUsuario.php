<?php
//inclui o arquivo de conexao cm o banco
include("conexao.php");
//Variaveis responsaveis pelo que o usuario ira digitar nos campos "usuario" e "senha"
$login = $_POST['username'];
$senha = $_POST['password'];
/*echo $nome;
echo $senha;*/
//executa os comandos sql fazendo uma consulta no banco
$sql = mysql_query("select * from tabusuario where login='$login' and senha='$senha'");
//recebe o resultado das linhas da variavel "$sql"
$resultado = mysql_num_rows($sql);
//Compara os valores da variavel resultado
if($resultado == 1){ 

 //Inicia uma sessão para o usuario
 session_start();
 $_SESSION['nome']= $nome; 
  //direciona o usuario para o menu principal caso a senha e o login estejam corretos
 header("Location:indexPosLogin.php");
 //se fosse para o administrador: header("Location:adm/index.php") direciona o adm para a pasta dele;
 }
 else{
 //Emite uma mensagem de alerta e redireciona o usuario para a pagina de login
  //echo "<script>alert('Acesso negado');location='index.html'</script>";
  }
?>