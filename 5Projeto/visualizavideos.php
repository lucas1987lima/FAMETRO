<?php
include("conexao.php");


      $sql = mysql_query("SELECT * FROM tabvideo where categoria = 2 ORDER BY titulo");
	
      if ($acao == 'pesquisar')
       {
         $sql = mysql_query("SELECT * FROM tabvideo where tabvideo.categoria = 2 and tabvideo.titulo like '%$nometitulo%' order by tabvideo.titulo");
       }	
?>



<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<ul>
<?php
  foreach (glob("videos/*.*") as $v){
    $name = basename($v);
	echo '<li><a href="baixar.php?file='.$name.'">'.$name.'</a></li>';
  }
?>
</ul>


<table>
  <form name="form1" method="post" action="?acao=pesquisar">
   <!-- BOTAO PESQUISAR -->
    <tr>
     <td><font><b><h3>Pesquisa por T&iacute;tulo</b></font></td>
     <td><input type="text" name="nometitulo" id="nometitulo" size="50"></td>
    </tr>
    <tr>
     <td align="center" colspan="2"><input type="submit" name="btpesq" value="PESQUISAR"></td>
    </tr>
    <!-- FIM BOTAO PESQUISAR -->
  </form>
  </table>
<?php
  for ($i=0;$i<mysql_num_rows($sql);$i++) {
    $vetor = mysql_fetch_array($sql);
	$id = mysql_result($sql,$i,"tabvideo.idvideo");

?>


<table border="0" align="center" width="100%">
   <tr>
       <td colspan="2" align="center"><h3><?php echo $vetor["titulo"];echo "<br>"; ?></h3></td>
   </tr>
   
   <tr>
       <td align="center" width="320">
          <video width="320" height="240" controls>
          <source src="videos/<?php $vetor["video"]; ?>" width="320" height="240" loop="true" autostart="true" controls="true">
          </video><BR>
          <a href="baixar.php=<?php echo $idvideo;?>">DOWNLOAD AQUI</a>
       </td>
       <td align="center">
          <?php echo $vetor["comentario"];echo "<br>"; ?>
       </td>
   </tr>
</table>
   
    <hr>

    <?php
   } // fechando o for
?>

</form>

</body>

</html>
