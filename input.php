<?php

include_once "base.php";

$year=$_POST['year'];
$mon=$_POST['mon'];
$num=$_POST['num'];
$money=$_POST['money'];

$sql="INSERT INTO `rec`( `year`, `mon`, `num`, `money`) VALUES('$year','$mon','$num','$money')";


echo $sql;
$pdo->exec($sql);
header('location:index.php');
?>


