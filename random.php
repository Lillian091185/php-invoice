<?php
include_once "base.php";

$codestr=["UG","UV","AZ","CA","BR","FH"];
$add=10;
for ($i=0; $i < $add; $i++) { 
    $code=$codestr[rand(0,5)];
    $mon=rand(1,6);
    $num=rand(30000000,79999999);
    $money=rand(50,1000);

    $sql="INSERT INTO `rec`( `code`,`year`, `mon`, `num`, `money`) VALUES('$code','2019','$mon','$num','$money')";
    $pdo->exec($sql);
    echo $sql;
}
?>
