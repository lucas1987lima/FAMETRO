<?php



$arquivo = $_FILES['arquivo'];

/*if ($arquivo['type'] == "application/msword" || $arquivo['type']== "application/vnd.ms-powerpoint" || $arquivo['type']== "text/plain")

{

  if ($arquivo['size']>45000000)

  {

    exit('Arquivo muito grande. Tamanho máximo permitido 500kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  

  }*/

  

  $novonome = $arquivo['name'];
// caso a pasta não exista ele irá criar uma com um nome
  $dir = "pastaarquivo/";

  if (!file_exists($dir))

  {

    mkdir($dir, 0755);  

  }

  $caminho = $dir.$novonome;

  move_uploaded_file($arquivo['tmp_name'],$caminho);

  echo "<script>
alert('Arquivo enviado com sucesso.');
location.href = 'uploadarquivo.php';
</script>";

  echo '<meta http-equiv="refresh" content="1; url=index.html" />';  

/*} else{

  echo "<script>
alert('Não foi possivel enviar o arquivo, tente novamente.');
location.href = 'uploadarquivo.php';
</script>";

}*/



?>