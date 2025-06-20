<html>
<head><!--comentario-->
<title>pagina de index</title>

<script language="javascript">
/*----------------------------------------------------------------------------
Formatação para qualquer mascara
-----------------------------------------------------------------------------*/
function formatar(src, mask){
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
    src.value += texto.substring(0,1);
  }
}
</script>
</head>

<script language="javascript" src="funcoes/validacaoCampos.js"></script>
<body>
<form name="form2"  method="post" action="verificaVoto.php">

<!-- URMA ELETRONICA PARTE DA ESQUERDA -->
<table align="center" border="0" width="800" height="400" background="img/urna.jpg">
 <tr>
  <td width="513">
  
 <!-- URMA ELETRONICA PARTE DO CENTRO --> 
    <table border="0" align="center">
     <tr>
      <td></td>
     </tr>
     <tr>
      <td width="400" height="250" align="center">
      <font color="#00CC33">
     <marquee id="scroller"  onmouseout="scroller.start()" scrollamount="2" scrolldelay="2" direction="up" width="400" height="250" frameborder="0" border="0">
       <h1><b>URNA ELETRONICA</b></h1>
       <h3>
       
      
       <b>Todos os Direitos Reservados à</b><br><br>
       Lucas Almeida Lima -> Programador Web<br<br><br>
       
       :-)
       
       
       
       
       </h3>
     </marquee>      

        
      
      </font>
      </td>
     </tr>
     <tr>
      <td></td>
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