<?php
//Conexao com o Banco
include("conexao.php");

      // Setando no banco a tabela de fotos
      $sql = mysql_query("SELECT * FROM tabfoto  ORDER BY titulo");
	
?>
<html>
  <head> 
  <link rel="shortcut icon" href="imagem/ia.ico"> 
  <title>Sistemas de Informação</title> 
 </head>
 <!-- fonte active do menu -->
 <link href="style.css" type="text/css" rel="stylesheet"/>
 <!-- fim da fonte active menu -->
 <body link="black" alink="black" vlink="black">
 <table align='center' width='1320' height=300' border='0' bordercolor="red"> 
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
	  <a href="imagem.php" class="classe1" style='text-decoration:none'><font color="white">Imagem</a>&nbsp;&nbsp;
	  <a href="video.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Video</a>&nbsp;&nbsp;
	  <a href="arquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Arquivo</a>&nbsp;&nbsp;
      <a href="download.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Download</a>&nbsp;&nbsp;	  
	  <a href="uploadimagem.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Upload Imagem</a>&nbsp;&nbsp;
	  <a href="uploadvideo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">UploadVideo</a>&nbsp;&nbsp;
	  <a href="uploadarquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Upload Arquivo</a>&nbsp;&nbsp;
	  <a href="comentario.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Comentário</a>&nbsp;&nbsp;	  
	  <a href="creditos.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Créditos</a>&nbsp;&nbsp;	  
	  <a href="encerrasessao.php" class="classe1" style='text-decoration:none'><font color="#FF0000">Sair</a>&nbsp;&nbsp;
	  </font>
	  </td>
	 </table>
 <!--fim menu-->
 
 <table BGCOLOR='black' align='center' width='1320' height='100%' border='1' bordercolor="grey">

 <center>
<!-- CRIANDO UM LACO DE REPETIÇÃO LISTANDO TUDO DA TABELA FOTOS-->
<?php
  for ($i=0;$i<mysql_num_rows($sql);$i++) {
    $vetor = mysql_fetch_array($sql);
?>
<!-- ---------------------------------------------------------- -->
<table border="0" align="center" width="100%">
   <tr>
       <td colspan="2" align="center"><h3>
	        <?php echo $vetor["titulo"];echo "<br>"; ?></h3>
       </td>
   </tr>
   
   <tr>
       <td align="center" width="320">
            <img src="<?php echo $vetor['arquivo'];?>" width="500" height="600">
       </td>
   </tr>
</table>
    <!-- CRIA LINHA PARA SEPARAR FOTOS-->
    <hr>

    <?php
   } // fechando o for
?>
<table BGCOLOR='black' align='center'width='1320'border='2' bordercolor="grey">
	<tr>
     <td width='1320'align='center' >
	  <font color="#00BFFF">5º PERÍODO SISTEMAS DE INFORMAÇÃO&nbsp;&reg;
	 </td>
	</tr>
    </table>
 </body>
 </html>
