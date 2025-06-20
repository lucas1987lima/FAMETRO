<?php 
   if ($acao == 'verificar'){
       
       $verdadeiro=0;
	   $aux1=$n2+$n3;
       $aux2=$n1+$n3;
	   $aux3=$n1+$n2;
	   
	   if($aux1>$n1){
	    $verdadeiro=$verdadeiro+1;
	   }
	   if($aux2>$n2){
	    $verdadeiro=$verdadeiro+1;
	   }
	   if($aux3>$n3){
	    $verdadeiro=$verdadeiro+1;
	   }
	   
	   if ($verdadeiro != 3){
	    echo "<script>alert('#### NÃO É UM TRIANGULO!!!!');location='exe12.php';</script>";
	   }
	   
	   else{
	     if ($n1 == $n2 && $n2 == $n3){
	       echo "<script>alert('TRIANGULO EQUILATERO!!!!');location='exe12.php';</script>";
	     }
	     if ($n1 == $n2 && $n2 != $n3){
	       echo "<script>alert('TRIANGULO ISOCELES!!!!');location='exe12.php';</script>";
	     }
	     if ($n2 == $n3 && $n3 != $n1){
	       echo "<script>alert('TRIANGULO ISOCELES!!!!');location='exe12.php';</script>";
	     }
	     if ($n3 == $n1 && $n1 != $n2){
	       echo "<script>alert('TRIANGULO ISOCELES!!!!');location='exe12.php';</script>";
	     }
	     if ($n1 != $n2 && $n2!= $n3 && $n1 !=$n3){
	       echo "<script>alert('TRIANGULO ESCALENO!!!!');location='exe12.php';</script>";
	     } 
       }
	 


   }
?>
<html>
<head>
<title>Exercicio</title>
</head>
 <form method="post" action="?acao=verificar">
 É um Triângulo<p>
 Digite le <input type="text" name="n1"><br>
 Digite ld <input type="text" name="n2"><br>
 Digite li <input type="text" name="n3"><br><p>
 <input type="submit" name="bt_envia" value="Verificar"><p>
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
