<?php
include("conexao.php");
$titulo = $_POST['titulo'];
$arquivo = $_POST['arquivo'];
 $sql = mysql_query("INSERT INTO tabvideo (titulo,arquivo) VALUES ('$titulo','$arquivo')");
   if ($sql == 0)
   {
     echo "<script>alert('Erro ao enviar!');location='uploadvideo.php';</script>";
   }
   else
   {
     echo "<script>alert('Enviado com sucesso!');location='uploadvideo.php';</script>";
   }

?>