<?php
//inclui o arquivo de conexao cm o banco
include("conexao.php");
//Variaveis responsaveis pelo que o usuario ira digitar nos campos "usuario" e "senha"
$nome = $_POST['username'];
$senha = $_POST['password'];
//executa os comandos sql fazendo uma consulta no banco
$sql = mysql_query("select * from usuario where usulogin='$nome' and ususenha='$senha'");
//recebe o resultado das linhas da variavel "$sql"
$resultado = mysql_num_rows($sql);
while($exibir = mysql_fetch_array($sql)){
$codigo = $exibir['usumatricula'];
}
//Compara os valores da variavel resultado
if($resultado == 1){ 
 //Inicia uma sessão para o usuario
 session_start();
 $_SESSION['nome']= $nome; 
 $_SESSION['codigo']= $codigo;  
  //direciona o usuario para o menu principal caso a senha e o login estejam corretos
 header("Location:menu.php");
 //se fosse para o administrador: header("Location:adm/index.php") direciona o adm para a pasta dele;
 }
 else{
 //Emite uma mensagem de alerta e redireciona o usuario para a pagina de login
  echo "<script>location='index.php'</script>";
  }
?>