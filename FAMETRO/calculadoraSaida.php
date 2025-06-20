<?php

$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$op = $_POST['opcao'];

if ($op == "so"){
 $calc = $v1+$v2;
 echo "A soma de ".$v1." + ".$v2." = ".$calc;
}
if ($op == "mu"){
 $calc = $v1*$v2;
 echo "A soma de ".$v1." X ".$v2." = ".$calc;
}
if ($op == "di"){
 $calc = $v1/$v2;
 echo "A soma de ".$v1." / ".$v2." = ".$calc;
}
if ($op == "su"){
 $calc = $v1-$v2;
 echo "A soma de ".$v1." -	 ".$v2." = ".$calc;
}

?>
