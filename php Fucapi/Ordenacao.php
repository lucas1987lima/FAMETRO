<?php
if ($acao == 'verificar')
  {


     if ($n1<$n2)
      {
       echo "A menor que B";
            }
             else
             {
                 echo "B menor que A";
             }
  }
?>
<html>
<head>
<title> Enviando variaveis para outra p&aacute;gina </title>
</head>
<body onload="document.form1.V1.focus();">
<form name="form1" method="post" action="?acao=verificar">
<table w>
   Digite N1 <input type="text" name="n1" id="n1" size="6"> <br/>
   Digite N2 <input type="text" name="n2" id="n2" size="6"> <br/>

  <input type="submit" name="botao1" value="Enviar">
</form>
</body>
</html>
