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
No menu Inserir, as galerias incluem itens que são projetados<br>
para corresponder à aparência geral do documento. Você pode usar<br>
essas galerias para inserir tabelas, cabeçalhos, rodapés, listas, folhas<br>
de rosto e outros blocos de construção do documento. Quando você cria<br>
imagens, gráficos ou diagramas, esses elementos também são coordenados<br>
com a aparência atual do documento. Você pode alterar facilmente a<br>
</body>
</html>
<?php
 }else
 header("Location:index.php");
?>
