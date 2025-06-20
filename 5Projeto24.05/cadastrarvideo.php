	<?php
	include("conexao.php");


	 if ($acao == 'cadastrar')
	 {


	 $sql = mysql_query("INSERT INTO tabvideo (titulo,arquivo) VALUES ('$titulo','$arquivo')");
	   if ($sql == 0)
	   {
		 echo "<script>alert('Falhou!');location='cadastrarvideo.php';</script>";
	   }
	   else
	   {
		 echo "<script>alert('OK!');location='cadastrarvideo.php';</script>";
	   }
	 }//fim if

	?>
<html>
<head>
<title>Untitled Document</title>
</head>

<body background="img/backgrounds/back06.png">
<br><br><br>
<form method="post" action="?acao=cadastrar"">
  <table border="1" width="500" align="center">
   <tr>
     <td colspan="2"><h1><center>CADASTRAR V&Iacute;DEO</center></h1></td>
   </tr>
   <tr>
     <td width="155">TITULO DO V&Iacute;DEO</td>
     <td><input type="text" name="titulo" size="50"></td>
   </tr>
   <tr>
     <td colspan="2" bgcolor="#FFFFFF">URL DO VIDEO<input type="text" name="arquivo" size="57"></td>
   </tr>
 
   <tr>
     <td colspan="2" align="center" bgcolor=""><input type="submit"></td>
   </tr>
  </table>

</form>
</body>
</html>
