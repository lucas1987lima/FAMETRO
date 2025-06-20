<?php
echo "O nome digitado: foi:";
$nome = $_POST['nome'];
$PHP = $_POST['PHP'];
$JAVA = $_POST['JAVA'];
$estadocivil = $_POST['estadocivil'];
/* 
NO MODO "MIGUE" AO INVES DE COLOCAR O "ISSET", APENAS COLOQUE O "@" NA FRENTE DA VARIAVEL, ASSIM IRA OCUTAR O ERRO
Exempo
@JAVA = $_POST['JAVA'};

ou
Coloca a Variavel dentro do If (ISSET) --> "$JAVA..."
*/
echo "<p>";
echo $nome;
echo "<p>";
 
 if (isset($_POST['PHP'])){
  echo "Curso escolhido --> ".$PHP;
 }
 if (isset($_POST['JAVA'])){
  echo "<br>Curso escolhido --> ".$JAVA;
 }

 if ($estadocivil == "ESCOLHA"){
  echo "Vc deve escolher um estado civil";
 }
 else{
  echo "<br> Estado civil: ".$estadocivil;
 }

echo "<p>";

?>
<html>
<head>
<title>Exercicio</title>
<br />
 <a href="index.php"><input type="button" name="bt_voltar" value="Voltar ao Menu de Exericios"></a>
 </form>
<body>
</body>
</html>
