<?php

include_once "base.php";

$year=$_POST['year'];
$period=$_POST['period'];
$award1=$_POST['award1'];
$award2=$_POST['award2'];
$award3=$_POST['award3'];
$award4=$_POST['award4'];
$award5=$_POST['award5'];
$award6=$_POST['award6'];
$award7=$_POST['award7'];


$sql="INSERT INTO `award`( `year`, `period`, `award1`, `award2`, `award3`, `award4`, `award5`, `award6`, `award7`) 
VALUES('$year','$period','$award1','$award2','$award3','$award4','$award5','$award6','$award7')";


echo $sql;
$pdo->exec($sql);

header('location:see1.php');

?>


