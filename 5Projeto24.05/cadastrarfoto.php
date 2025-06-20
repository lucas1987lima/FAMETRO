<?php
//Conexao com o Banco
include("conexao.php");

//Form envia pra ca
   if ($acao == 'cadastrar')
    { 
      $arquivo = $_FILES['arquivo'];
      if ($arquivo['type'] == "image/jpeg" || $arquivo['type']== "image/pjpeg" || $arquivo['type']== "image/png")
       {
        if ($arquivo['size']>500000)
		  {
           exit('Arquivo muito grande. Tamanho máximo permitido 500kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  
          }
 
            $novonome = md5(mt_rand(1,10000).$arquivo['name']).'.jpg';
			// caso a pasta não exista ele irá criar uma com um nome
			$dir = "pastaimagem/";
			
			if (!file_exists($dir))
			  {
               mkdir($dir, 0755);  
			  }
              $caminho = $dir.$novonome;


# ->    	  //----- Nomes que vao para o Banco ----
    			$titulo = $_POST['titulo'];
    			$novoarquivo = $caminho;
			  //-------------------------------------  
   

              move_uploaded_file($arquivo['tmp_name'],$caminho);
			  echo "<script>
						alert('Arquivo enviado com sucesso.');
						location.href = 'cadastrarfoto.php';
					</script>";

# ->    	 //---- Select enviando para o Banco----
      			$sql = mysql_query("INSERT INTO tabfoto (titulo,arquivo) VALUES ('$titulo','$novoarquivo')");
			//------------------------------------- 
  			
			echo '<meta http-equiv="refresh" content="1; url=cadastrarfoto.php" />';  
       }//FIM DO IF ($arquivo['type']......
	    else
	   {
    	 echo "<script>
					alert('Não foi possivel enviar o arquivo, tente novamente.');
					location.href = 'uploadarquivo.php';
		  	  </script>";
       }//FIM ELSE

    }// FIM IF ACAO == CADASTRAR
?>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<form action="?acao=cadastrar" method="post" enctype="multipart/form-data">
        <fieldset>
            <p><label for="Enviar arquivo">Enviar arquivo:</label></p>
             Titulo<input type="text" name="titulo" /><br />
            <input type="file" name="arquivo" class="width233" />
            <input type="submit" name="enviar" value="Enviar" />
        </fieldset>
    </form>
</body>
</html>