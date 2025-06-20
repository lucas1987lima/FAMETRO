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
      <td>
      <font color="#00CC33">
      
        <h1>URNA ELETRONICA</h1>
        Digite Seu CPF <input type="text" name="cpf" id="cpf" maxlength="14" size="10" OnKeyPress="formatar(this, '###.###.###-##')"><br>
        Selecione um Projeto e aperte Confirma<br>
        Turma do 1 periodo <input type="radio" name="opcao" id="opcao" value="t1"><br>
        Turma do 2 periodo <input type="radio" name="opcao" id="opcao" value="t2"><br>
        Turma do 3 periodo <input type="radio" name="opcao" id="opcao" value="t3"><br>
        Turma do 4 periodo <input type="radio" name="opcao" id="opcao" value="t4"><br> 
        Turma do 5 periodo <input type="radio" name="opcao" id="opcao" value="t5"><br>
        BRANCO <input type="radio" name="opcao" id="opcao" value="t0"><br>
        <input type="reset" value="CORRIGE">
        <input type="submit" value="CONFIRMA">
        
      
      </font>
      </td>
     </tr>
    </table>
<!-- URMA ELETRONICA PARTE DA DIREITA -->  

  </td>
  <td><img src="img/urna2.jpg" border="0" usemap="#Map"></td>
 </tr>
</table>



<map name="Map">
  <area shape="rect" coords="182,304,245,351" href="ConfirmarVoto.php">
  
  <area shape="rect" coords="103,316,167,358" href="votar.php">
  
  <area shape="rect" coords="23,316,88,356" href="ConfirmarVoto.php">
  
<area shape="rect" coords="51,100,95,141" href="#"></map>
</form>
</body>
</html>