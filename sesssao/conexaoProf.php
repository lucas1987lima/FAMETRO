<?php
$conecta = mysql_connect("localhost","root","");

echo "conectou com o mysql<br>";

$banco = mysql_select_db("nome_do_BANCO",$conecta);

echo "conectou com o Banco";
?>
