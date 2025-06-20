
<html>
<head>
<link rel="shortcut icon" href="imagem/ia.ico">
<title>CADASTRO DE ALUNOS FAMETRO</title>
</head>
<body>
<form method="post" action="validacadastro.php">
<br/>
  <table width="550" border="2" font bordercolor='#00BFFF'>
    <tr>
      <td><font color='#00BFFF'>Matrícula:</td>
      <td><input name="matricula" type="text" id="matricula" maxlength="60" />
	  <font color='#FF0000'>*</font>
    </tr>
	<tr>
      <td width="69"><font color='#00BFFF'>Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
	  <font color='#FF0000'>*</font>
    </tr>
    <tr>
      <td><font color='#00BFFF'>Login:</td>
      <td><input name="login" type="text" id="login" maxlength="12" />
	  <font color='#FF0000'>*</font>
    </tr>
    <tr>
      <td><font color='#00BFFF'>Senha:</td>
      <td><input name="senha" type="password" id="senha" maxlength="12" />
	  <font color='#FF0000'>*</font>
    </tr>
    <tr>
      <td colspan="2"><p>
        <input type="submit" value="Cadastrar">
       
 
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos!" />
         
 
         Campos com <font color='#FF0000'>*</font> são obrigatórios!
      <p>  </p></td>
    </tr>
</form>
</table>
</body>
</html>
