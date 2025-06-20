<?php
include("conexao.php");

$sql = mysql_query("SELECT * FROM votos");


?>

<html>
<head><!--comentario-->
<title>pagina de index</title>

<body>
<form name="form2"  method="post" action="verificaVoto.php">

<!-- URMA ELETRONICA PARTE DA ESQUERDA -->
<table align="center" border="0" width="800" height="400" background="img/urna.jpg">
 <tr>
  <td width="513">
  
 <!-- URMA ELETRONICA PARTE DO CENTRO --> 
    <table border="0" align="center">
     <tr>
      <td>
      <font color="#00CC33">
      <?php
          for ($i=0;$i<mysql_num_rows($sql);$i++) {
      ?> 
        <h1>PONTUAÇÃO GERAL</h1>
        
        Turma do 1 periodo ----------  <?php echo mysql_result($sql,$i,"votos.t1")?><br>
        Turma do 2 periodo ----------  <?php echo mysql_result($sql,$i,"votos.t2")?><br>
        Turma do 3 periodo ----------  <?php echo mysql_result($sql,$i,"votos.t3")?><br>
        Turma do 4 periodo ----------  <?php echo mysql_result($sql,$i,"votos.t4")?><br> 
        Turma do 5 periodo ----------  <?php echo mysql_result($sql,$i,"votos.t5")?><br>
        Votos em BRANCO ---------  <?php echo mysql_result($sql,$i,"votos.t0")?>
        
      <?php
 	   } // fechando o for
      ?> 
      </font>
      </td>
     </tr>
    </table>
<!-- URMA ELETRONICA PARTE DA DIREITA -->  

  </td>
  <td><img src="img/urna2.jpg" border="0" usemap="#Map"></td>
 </tr>
</table>




</form>
</body>
</html>