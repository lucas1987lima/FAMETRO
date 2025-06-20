<?php
//Verifica se o usuario fez login 
session_start();
if(isset($_SESSION['nome'])){
$usuario = $_SESSION['nome'];
$codigo= $_SESSION['codigo'];
?>
<html>
  <head>
  <link rel="shortcut icon" href="imagem/ia.ico">
  <title>Sistemas de Informação</title>
  <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
 </head>
 <link href="style.css" type="text/css" rel="stylesheet"/>
 <body link="black" alink="black" vlink="black">
 <table align='center' width='1320' height='300' border='0' bordercolor="red"> 
 <tr>
 <td>
<img src="imagem/redefufive.png" width="1320" height="300">
</td>
 </tr>
 </table>
 <!--menu-->
<table align='center' width='1320' height='35' border='0' bordercolor="red" BGCOLOR='black'>
	 <td width="1320" height="20" align='center' ><font face='Comic Sans MS'>
	  <a href="menu.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Menu</a>&nbsp;&nbsp;
	  <a href="imagem.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Imagem</a>&nbsp;&nbsp;
	  <a href="video.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Video</a>&nbsp;&nbsp;
	  <a href="arquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Arquivo</a>&nbsp;&nbsp;
      <a href="download.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Download</a>&nbsp;&nbsp;	  
	  <a href="uploadimagem.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Upload Imagem</a>&nbsp;&nbsp;
	  <a href="uploadvideo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">UploadVideo</a>&nbsp;&nbsp;
	  <a href="uploadarquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Upload Arquivo</a>&nbsp;&nbsp;
	  <a href="comentario.php" class="classe1" style='text-decoration:none'><font color="white">Comentário</a>&nbsp;&nbsp;	  
	  <a href="creditos.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Créditos</a>&nbsp;&nbsp;	  
	  <a href="encerrasessao.php" class="classe1" style='text-decoration:none'><font color="#FF0000">Sair</a>&nbsp;&nbsp;
	  </font>
	  </td>
	 </table>
 <!--fim menu-->
 <!--inicio meio-->
   <table align='center' width='600' height='100%' border='1' bordercolor="grey">
   <td valign='bottom' width='600' height='100%'>
   <center>
   <p />
   <p />
   <?php
	//inclui o arquivo de conexao com o banco de dados
    include("conexao.php");
	/*Executa comando sql p buscar os valores da tabela comentarios*/
	$tabela = mysql_query("SELECT usulogin,comdata,comhora,comcomentario FROM comentario INNER JOIN usuario where usumatricula=comusumatricula;");
	
	
	/*Armazena dentro da variavel exibir os valores da tabela.Essa função fetch_array busca 
	os dados armazenados na variavel tabela e define posições como um vetor*/
	while($exibir = mysql_fetch_array($tabela)){
	//Codigo que utiliza a função explode() para formatar a data
    $newdate = explode("-",$exibir['comdata']);
	$exibir['comdata']=$newdate[2].'/'.$newdate[1].'/'.$newdate[0];
	/*Exibe o conteúdo dos campos*/
	 echo "<b><font face='Comic Sans MS'>".$exibir['usulogin']."</b></font>"."&nbsp&nbsp";
	 echo "<b>em&nbsp&nbsp</b>".$exibir['comdata']."</font>&nbsp<font  face='Comic Sans MS'>ás</font>&nbsp";
	 echo $exibir['comhora']."&nbsp<font face='Comic Sans MS'>disse:</font><p /><font face='face='Comic Sans MS'>";
	 echo "<b>".$exibir['comcomentario']."</b></font><p /><hr />";
	 "<p />";
	 }//fim while
	 
   ?>
   </td>
   </table>
   <table align='center' width='45%'>
   <tr>
   <td align='center'>
   <form method="POST" action="validar.php">
   <br />
   <br />
   <div id="sharebox">
    <textarea placeholder="Deixe aqui seu comentario..." name='comentarios'></textarea>
   <div class="buttons">
    <input type="submit" value="Comentar"  a class="publish"></a> 
    <input type="reset" value="Limpar" a class="publish"></a>
   </div>	
   </div>
   </form>
   </table>
   </center>
   <!--Fim do meio-->
    <table BGCOLOR='black' align='center'width='1320'border='2' bordercolor="grey">
	<tr>
     <td width='1320' align='center' >
	  <font color="#00BFFF">5º PERÍODO SISTEMAS DE INFORMAÇÃO&nbsp;&reg;
	 </td>
	</tr>
    </table>
 </body>
 </html>
<?php
}else{

header("Location:index.php");
}
?>
