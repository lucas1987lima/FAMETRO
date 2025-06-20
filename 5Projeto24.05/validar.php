<?php
//Verifica se o usuario fez login 
session_start();
if(isset($_SESSION['nome'])){
@$codigo= $_SESSION['codigo'];
}
include("conexao.php");
/*Cria variaveis responsaveis por armazenar o que o usuario digitar nos campos do formulario*/
@$comentario=$_POST['comentarios'];
/*valida os campos p nao ficarem em branco e exibe uma mensagem de erro*/
if(empty($comentario)){
echo "<script>alert('O campo não pode ficar em branco!')</script>";
/*Retorna a pagina anterior*/
echo "<script>history.back();</script>";
}
else{
/*Insere os dados digitados na tabela comentarios*/
 $inserir = @mysql_query("insert into comentario values(null,curdate(),now(),'$comentario',$codigo);"); 
 echo '<meta http-equiv="refresh" content="1; url=comentario.php" />';  

}


?>