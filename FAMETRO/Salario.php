<?php 
   if ($acao == 'calcular'){
     $calc= ($sal*($aum/100));
	 $aux = ($sal+calc);
     echo "Informacoes do funcionario ".$nome." <br/> Salario antigo: ".$sal." <br/> Aumento de: ".$calc." <br/> Salario final: ".$aux;
   }
?>


<html>
<head>
<title>Exercicio</title>
</head>

<form method="post" action="?acao=calcular">
  <h2>AUMENTO DE SALARIO</h2>
  Nome: <input type="text" name="nome"/><br />
  Salario <input type="text" name="sal" /><br />
  Aumento <input type="text" name="aum"/><br />
  <input type="submit" />
  
</form>
<body>
</body>
</html>
