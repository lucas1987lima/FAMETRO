<?php
include("conexao.php");

  function UltimoIDAluno()
  {
    $sql = mysql_query("select id from tabalunos order by id desc limit 1");
    $dados = mysql_fetch_array($sql);
    return $dados[0];
  }
  
  function somar($n1,$n2) //n1 e n2 são parâmetros da função
  {
    $total = $n1 + $n2;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }

  function subtracao($n1,$n2) //n1 e n2 são parâmetros da função
  {
    $total = $n1 - $n2;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }
  
  function produto($n1,$n2) //n1 e n2 são parâmetros da função
  {
    $total = $n1 * $n2;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }
  
  function divisao($n1,$n2) //n1 e n2 são parâmetros da função
  {
    $total = $n1 / $n2;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }
  
  function cubo($x) //x é parâmetro da função
  {
    $total = $x * $x * $x;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }
  
  function quadrado($x) //x é parâmetro da função
  {
    $total = $x * $x;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }
  
  function dobro($x) //x é parâmetro da função
  {
    $total = $x * 2;  //total é uma var local e não global
    return $total;     //return retorna o total p/quem chamou a função
  }



?>
