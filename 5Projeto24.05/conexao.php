<?php
/*Cria uma variavel p armazenar a conexão cm o banco de dados e se a conexão falhar exibe uma mensagem de erro*/
$conectar=mysql_connect('localhost','root','root')or die("Erro ao conectar com o servidor!!!".mysql_error());
/*Cria uma variavel p selecionar o banco de dados e se a conexão falhar exibe uma mensagem de erro*/
$banco=mysql_select_db('projeto') or die ("Erro ao conectar com o banco de dados!!!".mysql_error());
