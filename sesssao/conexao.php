<?php
$_ENV["host"] = "localhost";
$_ENV["login"] = "root";
$_ENV["senha"] = "";
$_ENV["db"] = "turma4p";
$conn = mysql_connect ($_ENV["host"], $_ENV["login"],$_ENV["senha"]) or die ("Falha na Conexão");
mysql_select_db ($_ENV["db"],$conn) or die ("Falha na Seleção do Banco");
?>

