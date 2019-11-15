<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
<style>
     table{
             margin:0px;
             padding:5px;
             font-family:'微軟正黑體',sans-serif;
             font-size:1.5em;
             display:flex;
             justify-content:center;
             align-items:center;  
             position:relative;
     }

     td{
            background: white;
            border: 2px solid gray;
            padding:5px;
            text-align:center;
            font-weight:bold;
            box-shadow:2px 3px 1px purple;
            border-radius:5px;
            opacity:0.6;
     }

     body{
           background-image:url(./images/5.jpg);
           background-repeat: cover;
     }

     .btn{
            position: absolute;
            top: 35px;
            left:56%;
            background-image:url("./images/2.jpg");
            background-size:cover;
            width:50px;
            height:20px;
            cursor:pointer;
     }
</style>
</head>
<body>
        
<h1><span style="font-family:'微軟正黑體',sans-serif; color:blue; position:relative;left:46%; text-shadow:0px 0px 3px red;;" >發票清單</span></h1>
<input type="button" class ="btn" onclick="location.href='index.php'">
<?php
include_once "base.php";

$sql="SELECT `mon`, `num`, `money` FROM `rec` WHERE 1";
$data=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// print_r($data);
?>
<table>
    <tr style="color:red; font-weight:bold;">
        <td>月份</td>
        <td>發票號碼</td>
        <td>金額</td>
    </tr>
<?php
foreach ($data as $value) {
?>
<?php
    if ($value['mon']==1){
?><tr>        
<td> 
<?php       
        echo "1,2月";
?>
</td>
<td>
<?php 
        echo $value['num'];
?>
</td>
<td>
<?php
        echo $value['money']."元";
?>
</td>
<?php
    
    }else if($value['mon']==2){
        ?><tr>        
<td> 
<?php       
        echo "3,4月";
?>
</td>
<td>
<?php 
        echo $value['num'];
?>
</td>
<td>
<?php
        echo $value['money']."元";
?>
</td>
<?php
    }else if($value['mon']==3){
        ?><tr>        
<td> 
<?php       
        echo "5,6月";
?>
</td>
<td>
<?php 
        echo $value['num'];
?>
</td>
<td>
<?php
        echo $value['money']."元";
?>
</td>
<?php
    }else if($value['mon']==4){
        ?><tr>        
<td> 
<?php       
        echo "7,8月";
?>
</td>
<td>
<?php 
        echo $value['num'];
?>
</td>
<td>
<?php
        echo $value['money']."元";
?>
</td>
<?php
    }else if($value['mon']==5){
        ?><tr>        
<td> 
<?php       
        echo "9,10月";
?>
</td>
<td>
<?php 
        echo $value['num'];
?>
</td>
<td>
<?php
        echo $value['money']."元";
?>
</td>
<?php
    }else if($value['mon']==6){
        ?><tr>        
<td> 
<?php       
        echo "11,12月";
?>
</td>
<td>
<?php 
        echo $value['num'];
?>
</td>
<td>
<?php
        echo $value['money']."元";
?>
</td>
<?php
    }
?>   
    </tr>
<?php
}
?>
</table>
</body>
</html>

