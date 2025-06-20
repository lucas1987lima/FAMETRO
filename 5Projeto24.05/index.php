<html>
<head>
    <link rel="shortcut icon" href="imagem/ia.ico">
	
    <title>Sistemas de informação 5°</title>
	<!-- link do slide -->
    <link href="themes/1/imagemslide.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/imagemslide.js" type="text/javascript"></script>
	<!-- fim link slide -->
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
<SCRIPT LANGUAGE="JavaScript"> 
<!-- 
var U = "cadastro.php"; 

var X = 100; 
var Y = 100; 
var W = 1000; 
var H = 1000; 
var s="resizable,left="+X+",top="+Y+",screenX="+X+",screenY="+Y+",width="+570+",height="+200; 
function popMe(){ 
var SGW = window.open(U,'TheWindow',s) 
} 
// --> 
</script>
 
</head>
<body>
<!-- Bolinhas -->
<script type="text/javascript" src="trio.js"></script>
<!-- fim bolinhas -->
<table align='center' width='1100' height='500' background='imagem/fame3.png'>
<td>
   <br/>
   <br/>
   <br/>
   <br/>
   </p>
    <div id="sliderFrame">
       
        <div id="slider">
            <img src="imagem/propaganda1.png"/>
            <img src="imagem/propaganda2.png"/>
            <img src="imagem/propaganda3.png"/>
            <img src="imagem/propaganda4.png">
            <img src="imagem/propaganda5.png"/>
        </div>

    </div>
</td>
 </table> 
<form action="validausuario.php" method="POST">
<table width='225' valign='top' align='center' border=1 cellpadding=3 bordercolor="#00BFFF">
<tr>
  <td><font color='#00BFFF'><b>Usuário:</b></td>
  <td><input type="text" name="username"size="30"></td>
</tr>
<tr>
  <td><font color='#00BFFF'><b>Senha:</b></td>
  <td><input type="password" name="password"size="30"></td>
</tr>
<tr>
  <td align=right><input type="submit" value="Entrar" style="width:150;height:30;background:#00BFFF;color:red"></td>
  <td align=center><input type="submit" value="Novo usuário" onclick="javascript:popMe()" style="width:201;height:30;background:#00BFFF;color:red"></td>
</tr>
</table>
</form> 
</body>
</html>
