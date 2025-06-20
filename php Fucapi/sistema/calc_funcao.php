<html>
<head>
<title> CALCULADORA </title>
</head>
<body onload="document.form1.n1.focus();" bgcolor="101010">
<div align="center"><b></b><h1><font color="#ffffff"> CALCULADORA COM FUN&Ccedil;&Atilde;O</font></h1></b></div>
<br/><br/>
<form name="form1" method="post" action="recebe_calc_funcao.php">
<table width="24%" align="center" border="1" bordercolor="yellow" bgcolor="red">
<tr>
 <td> 
   Digite N1 <input type="text" name="n1" id="n1" size="6"> <br/>
   Digite N2 <input type="text" name="n2" id="n2" size="6"> <br/>
   
   Operacoes: <select name="op">
   <option value="1"> SOMA</option>
   <option value="2"> SUBTRACAO</option>
   <option value="3"> MULTIPLICACAO</option>
   <option value="4"> DIVISAO</option>
   <option value="5"> CUBO DE N1</option>
   <option value="6"> CUBO DE N2</option>
   <option value="7"> QUADRADO DE N1</option>
   <option value="8"> QUADRADO DE N2</option>
 
  <input type="submit" name="botao1" value="Calcular">
 </td>
</tr>
</table>
</form>
</body>
</html>
