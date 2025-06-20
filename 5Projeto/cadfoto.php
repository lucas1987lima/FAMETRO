<?php
include("conexao.php");


 if ($acao == 'cadastrar')
 {

 $categoria="1";
 $sql = mysql_query("INSERT INTO tabfoto (categoria,titulo,foto,comentario) VALUES ('$categoria','$titulo','$foto','$comentario')");
   if ($sql == 0)
   {
     echo "<script>alert('Falhou!');location='cadfoto.php';</script>";
   }
   else
   {
     echo "<script>alert('OK!');location='cadfoto.php';</script>";
   }
 }//fim if

?>
<html>
<head>
<title>Untitled Document</title>
</head>

<body background="img/backgrounds/back06.png">
<br><br><br>
<form method="post" action="?acao=cadastrar">
  <table border="1" width="500" align="center">
   <tr>
     <td colspan="2"><font color="#FFFFFF"><h1><center>CADASTRAR FOTO</center></h1></font></td>
   </tr>
   <tr>
     <td width="155"><font color="#FFFFFF">TITULO</font><font color="#FFFFFF"> DO V&Iacute;DEO </font></td>
     <td><input type="text" name="titulo" size="50"></td>
   </tr>
   <tr>
     <td colspan="2" bgcolor="#FFFFFF"><input type="file" name="foto"></td>
   </tr>
   <tr>
   <tr>
      <td><font color="#FFFFFF">Coment&aacute;rio</font></td>
     <td bgcolor="#FFFFFF"><textarea name="comentario" id="comentario" cols="80" rows="10"></textarea></td>
   </tr>
   <tr>
     <td colspan="2" align="center" bgcolor=""><input type="submit"></td>
   </tr>
  </table>

</form>
</body>
</html>
