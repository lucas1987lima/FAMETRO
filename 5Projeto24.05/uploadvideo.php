<?php
//Verifica se o usuario fez login 
session_start();
if(isset($_SESSION['nome'])){
?>
<html>
  <head> 
  <link rel="shortcut icon" href="imagem/ia.ico"> 
  <title>Sistemas de Informa��o</title> 
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
	  <a href="imagem.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Imagem</a>&nbsp;&nbsp;
	  <a href="video.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Video</a>&nbsp;&nbsp;
	  <a href="arquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Arquivo</a>&nbsp;&nbsp;
      <a href="download.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Download</a>&nbsp;&nbsp;	  
	  <a href="uploadimagem.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Upload Imagem</a>&nbsp;&nbsp;
	  <a href="uploadvideo.php" class="classe1" style='text-decoration:none'><font color="white">UploadVideo</a>&nbsp;&nbsp;
	  <a href="uploadarquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Upload Arquivo</a>&nbsp;&nbsp;
	  <a href="comentario.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Coment�rio</a>&nbsp;&nbsp;	  
	  <a href="creditos.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Cr�ditos</a>&nbsp;&nbsp;	  
	  <a href="encerrasessao.php" class="classe1" style='text-decoration:none'><font color="#FF0000">Sair</a>&nbsp;&nbsp;
	  </font>
	  </td>
	 </table>
 <!--fim menu-->
 <table align='center' width='1320' height='100%' border='1' bordercolor="grey">
 <td background='imagem/bot2.png' width='200' height='340' valign='top' align='center'>
 <font color='red'>Seja Bem Vindo! 
	 <br />
	 <?php
	 
      echo "<b>".$_SESSION['nome']."</b>";
      ?>
	  </font>
</td>
<!--inicio meio-->
<!-- Upload das imagens -->
<td valign='top' BGCOLOR='black' width='920' height='340'>
<center><font color='red'><br/><br/><br/>
 <form method="POST" action="uploadvideo2.php">
  <table border="1" width="500" align="center">  
   <tr>
     <td colspan="2"><h3><center><font color='red'>CADASTRAR V�DEO:</center></h1></td>
   </tr>
   <tr>
     <td width="155"><font color='red'>T�TULO DO V�DEO:</td>
     <td><input type="text" name="titulo" size="52"></td>
   </tr>
   <tr>
     <td colspan="2" ><font color='red'>URL DO V�DEO:&nbsp;<input type="text" name="arquivo" size="57"></td>
   </tr> 
   <tr>
     <td colspan="2" align="center" bgcolor=""><input type="submit"></td>
   </tr> 
  </table>
</form>
 </td>
  <td BGCOLOR='black' width='200' height='340' align='center' valign='top'>
<font color='#00BFFF'>Nome dos Desenvolvedores<br/>
   <marquee  width="200" height="320" scrolldelay="2" scrollamount="2" direction="up" onmouseover="this.stop()" onmouseout="this.start()"><center>
 <br/>
<font color='#00BFFF' face='Castellar' size='2'>Daniel Moura<br/>
Jonathan Rodrigues<br/>
Rafael Japa<br/>
Lucas<br/>
<br/>
   </marquee>
 </td>
  </table> 
 <!-- fim do upload -->
 <!-- fim meio -->
 

    <table BGCOLOR='black' align='center'width='1320'border='2' bordercolor="grey">
	<tr>
     <td width='1320'align='center' >
	  <font color="#00BFFF">5� PER�ODO SISTEMAS DE INFORMA��O&nbsp;&reg;
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
