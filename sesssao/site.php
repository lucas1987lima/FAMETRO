<?php
session_start();
if((isset($_SESSION['usuario']))&&(isset($_SESSION['senha']))){
?>
<html><head>
<title>Meu Site</title>
</head>
<body bgcolor="green">
<h1>Seja bem vindo ao nosso site</h1><p>
<?php echo $_SESSION['usuario'];?><p>

<a href="destruirSessao.php">Sair</a>

<hr>
No menu Inserir, as galerias incluem itens que s�o projetados<br>
para corresponder � apar�ncia geral do documento. Voc� pode usar<br>
essas galerias para inserir tabelas, cabe�alhos, rodap�s, listas, folhas<br>
de rosto e outros blocos de constru��o do documento. Quando voc� cria<br>
imagens, gr�ficos ou diagramas, esses elementos tamb�m s�o coordenados<br>
com a apar�ncia atual do documento. Voc� pode alterar facilmente a<br>
</body>
</html>
<?php
 }else
 header("Location:index.php");
?>
