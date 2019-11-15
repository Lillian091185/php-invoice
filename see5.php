<?php
include_once "base.php";

$sql="SELECT * FROM `award` WHERE period='5'";
$data=$pdo->query($sql)->fetch(PDO::FETCH_NUM);
// print_r($data);
// echo $sql;
if ($data[2]==5) {
    $mon="9,10";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style_see.css">
    <style>
    
    </style>
</head>
<body>
<table>
<tr>
    <td class="mon"><a href="see1.php">1,2月</a></td>
    <td class="mon"><a href="see2.php">3,4月</a></td>
    <td class="mon"><a href="see3.php">5,6月</a></td>
    <td class="mon"><a href="see4.php">7,8月</a></td>
    <td class="mon"><a href="see5.php">9,10月</a></td>
    <td class="mon"><a href="see6.php">11,12月</a></td>
    <td class="mon"><a href="index.php">回首頁</a></td>
</tr>
</table>
<h1><span style="font-family:'微軟正黑體',sans-serif">統一發票中獎號碼清單</span></h1>
<form action="award5.php" method="post">
<input type="submit" value="開獎" class="sub">
<table>
    <tr>
    <td colspan="3" style="background:blue; opacity:0.5;">年度:<?=$data[1]?>年</td>
    </tr>
    <tr>
        <td>月份:</td>
        <td><?=$mon?>月</td>
        <td>獎金</td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td><?=$data[3]?></td>
        <td>1000萬</td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><?=$data[4]?></td>
        <td>200萬</td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td><?=$data[5]."<br>".$data[6]."<br>".$data[7]?></td>
        <td>20萬</td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
        <td>4萬元</td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
        <td>1萬元</td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
        <td>4千元</td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
        <td>1千元</td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
        <td>2百元</td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td><?=$data[8]."<br>".$data[9]?></td>
        <td>兩百元</td>
    </tr>
</table>
<?php
    
?>
</body>
</html>
