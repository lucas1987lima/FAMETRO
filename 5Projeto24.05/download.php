<?php
//Verifica se o usuario fez login 
session_start();
if(isset($_SESSION['nome'])){
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
	  <a href="imagem.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Imagem</a>&nbsp;&nbsp;
	  <a href="video.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Video</a>&nbsp;&nbsp;
	  <a href="arquivo.php" class="classe1" style='text-decoration:none'><font color="#00BFFF">Arquivo</a>&nbsp;&nbsp;
      <a href="download.php" class="classe1" style='text-decoration:none'><font color="white">Download</a>&nbsp;&nbsp;	  
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
 
 <table align='center' width='1320' height='340' border='1' bordercolor="grey">
<td background='imagem/bot2.png' width='200' height='340' valign='top' align='center'>
<font color='red'>Seja Bem Vindo! 
	 <br />
	 <?php
	 
      echo $_SESSION['nome'];
      ?>
	  </font>
</td>

<!--inicio meio-->
 <td valign='top' background='imagem/b2.png' width='920' height='340'>
 <center><font color='grey'>
 <br/>
 <font color="red">Faça o download dos programas utilizados para a criação do site, entre outros.<br/></br>
<a href="http://www.baixaki.com.br/download/notepad-.htm" target="_blank" class="classe1" style='text-decoration:none'><font color="#00BFFF">Notepad++ 6.2.2</a><br/>
<a href="http://www.baixaki.com.br/download/adobe-dreamweaver.htm" target="_blank" class="classe1" style='text-decoration:none'><font color="white">Adobe Dreamweaver CS6</a><br/>
<a href="http://www.baixaki.com.br/download/dev-c-.htm" target="_blank" class="classe1" style='text-decoration:none'><font color="#00BFFF">DEV C++</a><br/>
<a href="http://www.baixaki.com.br/download/atube-catcher.htm" target="_blank" class="classe1" style='text-decoration:none'><font color="white">A Tube Catcher</a><br/>
<a href="http://www.baixaki.com.br/download/mozilla-firefox.htm" target="_blank" class="classe1" style='text-decoration:none'><font color="00BFFF">Mozilla Firefox</a><br/>
<a href="http://www.baixaki.com.br/download/google-chrome.htm" target="_blank" class="classe1" style='text-decoration:none'><font color="white">Google Chrome</a><br/>

</center>
 </td>
 <!-- fim meio -->
 
 <td BGCOLOR='black' width='200' height='340' align='center' valign='top'>
<font color='#00BFFF'>Nome dos Desenvolvedores<br/>
   <marquee  width="200" height="320" scrolldelay="2" scrollamount="2" direction="up" onmouseover="this.stop()" onmouseout="this.start()"><center>
 <br/>
<font color='#00BFFF' face='Castellar' size='2'>Daniel Moura<br/>
Jhonatan Rodrigues<br/>
Rafael Japa<br/>
Lucas<br/>
<br/>
   </marquee>
 </td>
 </table>
 
    <table BGCOLOR='black' align='center'width='1320'border='2' bordercolor="grey">
	<tr>
     <td width='1320'align='center' >
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

