<?php
echo $q1 = $_POST['q1'];
echo $q2 = $_POST['q2'];
echo $q3 = $_POST['q3'];
echo $q4 = $_POST['q4'];
echo $q5 = $_POST['q5'];
echo $q6 = $_POST['q6'];

//Respostas Certas

$resposta1 = "a";
$resposta2 = "c";
$resposta3 = "b";
$resposta4 = "a";
$resposta5 = "c";
$resposta6 = "b";
//-------------------
//Variaveis de controle
$acertos = 0;
$erros =0;
//-------------------
 
 // Calculando resultados
 if($q1 == $resposta1){
   $acertos++;
 }
 else{
  $erros++;
 }
 
 if($q2 == $resposta2){
   $acertos++;
 }
 else{
  $erros++;
 }
 
 if($q3 == $resposta3){
   $acertos++;
 }
 else{
  $erros++;
 }
 
 if($q4 == $resposta4){
   $acertos++;
 }
 else{
  $erros++;
 }
 
  if($q5 == $resposta5){
   $acertos++;
 }
 else{
  $erros++;
 }
 
 if($q6 == $resposta6){
   $acertos++;
 }
 else{
  $erros++;
 }
 $percenttualAcerto = ($acerto*100)/($acerto+ $erros);
 $percenttualerros = ($acerto*100)/($acerto+ $erros);
 echo "Acertos: ".$acertos; "<br>";
 echo "Erros: ".$erros; "<br>";
 echo "Percentual de Acertos ".percenttualAcerto;
 echo "Percentual de Erros ".percenttualerros;

?>
<a href="formQuestionario01.php">Voltar </a>