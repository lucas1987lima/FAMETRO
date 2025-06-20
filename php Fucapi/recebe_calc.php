<?php
echo "O valor digitado em N1 foi: ".$n1;
echo "<br/>";
echo "O valor digitado em N2 foi: " .$n2;
echo "<br/><br/>";
  $soma = $n1 + $n2;
  $sub  = $n1 - $n2;
  $prod = $n1 * $n2;
  $div  = $n1 / $n2;

echo "Resultado da Soma: " .$soma;
echo "<br/> Resultado da Subtracao: " .$sub;
echo "<br/> Resultado do Produto: " .$prod;
echo "<br/> Resultado da Divisao: " .$div;
echo "<br/> <br/>";
echo "<input type='button' name='btv' value='Voltar' onclick=location='calculadora.php'>"; //voltar co botao
// . (ponto) = concatenação / união 
?>

