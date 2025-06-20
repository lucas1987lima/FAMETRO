<html>
<head>
<title>Prova</title>
</head>
<body>
<form method="post" action="respostas.php">
Prova online<p>
Passo 2 de 2<p>

4) Qual fruta e feito o Chocolate?<br>
a. <input type="radio" name="q4" value="a"> Cacau<br>
b. <input type="radio" name="q4" value="b"> Manga<br>
c. <input type="radio" name="q4" value="c"> Goiaba<p>

5) Quantas equipes participaram do Campeonato Brasileiro?<br>
a. <input type="radio" name="q5" value="a"> 16<br>
b. <input type="radio" name="q5" value="b"> 18<br>
c. <input type="radio" name="q5" value="c"> 20<p>

6) O que vai acontecer neste final de SemetreQuel?<br>
a. <input type="radio" name="q6" value="a"> Vou chorar pro Professor, porque vou perder minha bolsa<br>
b. <input type="radio" name="q6" value="b"> Vou passar direto<br>
c. <input type="radio" name="q6" value="c"> Vou Reprovar<p>
  
 <input type="hidden" name="q1" value="<?php echo $_POST['q1'];?>">
 <input type="hidden" name="q2" value="<?php echo $_POST['q2'];?>">
 <input type="hidden" name="q3" value="<?php echo $_POST['q3'];?>">
 
<input type="submit" value="Finalizar">


</form>
</body>
</html>
