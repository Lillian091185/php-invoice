<link rel="stylesheet" type="text/css" href="style_award.css">
<?php
include_once "base.php";

$sql="SELECT `num` FROM `rec` WHERE `id`";     
$user=$pdo->query($sql)->fetchAll(PDO::FETCH_NUM);
// print_r($user);

$sql2="SELECT `award1`, `award2`, `award3`, `award4`, `award5`, `award6`, `award7` FROM `award` WHERE period='3'";  
$user2=$pdo->query($sql2)->fetch(PDO::FETCH_NUM);
// print_r($user2);

$a=$user2;
?>
<h1><span style="font-family:'微軟正黑體',sans-serif; color:blue; position:relative;left:40%; text-shadow:0px 0px 3px red;;" >開獎囉!!!<('oo')></span></h1>
<input type="button" class ="btn" onclick="location.href='see3.php'">
<table>
    <tr>
    <td  style="color:blue;background:pink;height:35px;font-size:1.2em">發票號碼</td>
    <td  style="color:blue;background:pink;height:35px;font-size:1.2em">中獎了嘛??</td>
    </tr>
<?php
foreach ($user as $value) {
?>
<tr>  
<?  
    $b=implode($value);
    if (substr("$a[0]", 0, 8) == substr("$b", 0, 8)) {
?>   
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中1000萬!!!";
        ?>      
    </td>     
<?
    }elseif(substr("$a[1]", 0, 8) == substr("$b", 0, 8)){
?>
    <td>
        <?     
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中200萬!!!";
        ?>
    </td>   
<?
    }elseif(substr("$a[2]", 0, 8) == substr("$b", 0, 8) || substr("$a[3]", 0, 8) == substr("$b", 0, 8) || substr("$a[4]", 0, 8) == substr("$b", 0, 8)) {
?>
    <td>   
        <?   
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中頭獎!!!";
        ?>
    </td>   
<?     
    }else if(substr("$a[2]", 1, 7) == substr("$b", 1, 7) || substr("$a[3]", 1, 7) == substr("$b", 1, 7) || substr("$a[4]", 1, 7) == substr("$b", 1, 7)){
?>       
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中二獎!!!";
        ?>
    </td>
<?      
    }else if(substr("$a[2]", 2,6) == substr("$b", 2,6) || substr("$a[3]", 2,6) == substr("$b", 2,6) || substr("$a[4]", 2,6) == substr("$b", 2,6)){
?>
    <td>   
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中三獎!!!";
        ?>
    </td>  
<?         
    }else if(substr("$a[2]", 3,5) == substr("$b", 3,5) || substr("$a[3]", 3,5) == substr("$b", 3,5) || substr("$a[4]", 3,5) == substr("$b", 3,5)){
?>       
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中四獎!!!";
        ?>
    </td>
<?       
    }else if(substr("$a[2]", 4,4) == substr("$b", 4,4) || substr("$a[3]", 4,4) == substr("$b", 4,4) || substr("$a[4]",4,4) == substr("$b", 4,4)){
?>      
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中五獎!!!";
        ?>
    </td>
<?      
    }else if(substr("$a[2]", 5,3) == substr("$b", 5,3) || substr("$a[3]", 5,3) == substr("$b", 5,3) || substr("$a[4]", 5,3) == substr("$b", 5,3)){
?>      
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中六獎!!!";
        ?>
    </td>  
<?       
    }elseif(substr("$a[5]", 0, 3) == substr("$b", 5, 3) || substr("$a[6]", 0, 3) == substr("$b", 5, 3)){
?>
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "中兩百!!!";
        ?>
    </td>
<?       
    }else{
?>
    <td>
        <?
        echo $b;
        ?>
    </td>
    <td>
        <?
        echo "沒中!!!";
        ?>
    </td>
 </tr>       
<?
    }
}
?>
   
</table>

