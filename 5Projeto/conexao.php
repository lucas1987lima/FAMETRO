<?php
$_ENV["host"] = "localhost";
$_ENV["login"] = "root";
$_ENV["senha"] = "";
$_ENV["db"] = "fametro_projeto5";
$conn = mysql_connect ($_ENV["host"], $_ENV["login"],$_ENV["senha"]) or die ("Falha na Conex�o");
mysql_select_db ($_ENV["db"],$conn) or die ("Falha na Sele��o do Banco");
?>

