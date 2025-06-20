<?php
include("conexao.php");

$cpf = $_POST['cpf'];
$opcao = $_POST['opcao'];


   $sql = mysql_query("INSERT INTO cpfs(cpf) value ('$cpf')");


  

if ($sql == 0)
   {
     echo "<script>alert('CPF JA CADASTRADO ou em Branco!!');location='votar.php';</script>";
   }
   else
   {
//-----------------------------  Conta votos em Branco t0	---------------------------------------
    if ($opcao=='t0'){
    
	//PEGANDO O ULTIMO VOTO
	 function ultimo_voto_t0()
	  {
  	   $sql = mysql_query("SELECT t0 FROM votos order by t0 desc limit 1");
       $result = mysql_fetch_array($sql);
       return $result[0];
      }//FIM FUNCTION
	  
	   $t0 = ultimo_voto_t0()+1;
	   
	   $sql = mysql_query("UPDATE votos SET t0 = $t0");
	}//FIM t0
	
//-----------------------------  Conta votos em Branco t1	---------------------------------------
    if ($opcao=='t1'){
    
	//PEGANDO O ULTIMO VOTO
	 function ultimo_voto_t1()
	  {
  	   $sql = mysql_query("SELECT t1 FROM votos order by t1 desc limit 1");
       $result = mysql_fetch_array($sql);
       return $result[0];
      }//FIM FUNCTION
	  
	   $t1 = ultimo_voto_t1()+1;
	   
	   $sql = mysql_query("UPDATE votos SET t1 = $t1");
	}//FIM t1
	
//-----------------------------  Conta votos em Branco t2	---------------------------------------
    if ($opcao=='t2'){
    
	//PEGANDO O ULTIMO VOTO
	 function ultimo_voto_t2()
	  {
  	   $sql = mysql_query("SELECT t2 FROM votos order by t2 desc limit 1");
       $result = mysql_fetch_array($sql);
       return $result[0];
      }//FIM FUNCTION
	  
	   $t2 = ultimo_voto_t2()+1;
	   
	   $sql = mysql_query("UPDATE votos SET t2 = $t2");
	}//FIM t2

//-----------------------------  Conta votos em Branco t3	---------------------------------------
    if ($opcao=='t3'){
    
	//PEGANDO O ULTIMO VOTO
	 function ultimo_voto_t3()
	  {
  	   $sql = mysql_query("SELECT t3 FROM votos order by t3 desc limit 1");
       $result = mysql_fetch_array($sql);
       return $result[0];
      }//FIM FUNCTION
	  
	   $t3 = ultimo_voto_t3()+1;
	   
	   $sql = mysql_query("UPDATE votos SET t3 = $t3");
	}//FIM t3
	
//-----------------------------  Conta votos em Branco t4	---------------------------------------
    if ($opcao=='t4'){
    
	//PEGANDO O ULTIMO VOTO
	 function ultimo_voto_t4()
	  {
  	   $sql = mysql_query("SELECT t4 FROM votos order by t4 desc limit 1");
       $result = mysql_fetch_array($sql);
       return $result[0];
      }//FIM FUNCTION
	  
	   $t4 = ultimo_voto_t4()+1;
	   
	   $sql = mysql_query("UPDATE votos SET t4 = $t4");
	}//FIM t4
	
//-----------------------------  Conta votos em Branco t5	---------------------------------------
    if ($opcao=='t5'){
    
	//PEGANDO O ULTIMO VOTO
	 function ultimo_voto_t5()
	  {
  	   $sql = mysql_query("SELECT t5 FROM votos order by t5 desc limit 1");
       $result = mysql_fetch_array($sql);
       return $result[0];
      }//FIM FUNCTION
	  
	   $t5 = ultimo_voto_t5()+1;
	   
	   $sql = mysql_query("UPDATE votos SET t5 = $t5");
	}//FIM t5
   
   
     echo "<script>alert('OK');location='ConfirmarVoto.php';</script>";
   }


?>
