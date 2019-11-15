<?php
include_once "base.php";

$sql="SELECT `num` FROM `rec` WHERE `id`";     
$user=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);


$a=["53553134","12345678","59784521","73770368","11145678","883","999"];

foreach ($user as $key => $value) {
    $b=implode($value);
    if (substr("$a[0]", 0, 8) == substr("$b", 0, 8)) {
        echo $b;
        echo "中1000萬"."<br>";
    }elseif(substr("$a[1]", 0, 8) == substr("$b", 0, 8)){
        echo $b;
        echo "中200萬"."<br>";
    }elseif(substr("$a[2]", 0, 8) == substr("$b", 0, 8) || substr("$a[3]", 0, 8) == substr("$b", 0, 8) || substr("$a[4]", 0, 8) == substr("$b", 0, 8)) {
        echo $b;
        echo "中頭獎"."<br>";
    } else if(substr("$a[2]", 1, 7) == substr("$b", 1, 7) || substr("$a[3]", 1, 7) == substr("$b", 1, 7) || substr("$a[4]", 1, 7) == substr("$b", 1, 7)){
        echo $b;
        echo "中二獎"."<br>";
        
    }else if(substr("$a[2]", 2,6) == substr("$b", 2,6) || substr("$a[3]", 2,6) == substr("$b", 2,6) || substr("$a[4]", 2,6) == substr("$b", 2,6)){
        echo $b;
        echo "中三獎"."<br>";
        
    }else if(substr("$a[2]", 3,5) == substr("$b", 3,5) || substr("$a[3]", 3,5) == substr("$b", 3,5) || substr("$a[4]", 3,5) == substr("$b", 3,5)){
        echo $b;
        echo "中四獎"."<br>";
        
    }else if(substr("$a[2]", 4,4) == substr("$b", 4,4) || substr("$a[3]", 4,4) == substr("$b", 4,4) || substr("$a[4]",4,4) == substr("$b", 4,4)){
        echo $b;
        echo "中五獎"."<br>";
        
    }else if(substr("$a[2]", 5,3) == substr("$b", 5,3) || substr("$a[3]", 5,3) == substr("$b", 5,3) || substr("$a[4]", 5,3) == substr("$b", 5,3)){
        echo $b;
        echo "中六獎"."<br>";
        
    }elseif(substr("$a[5]", 0, 3) == substr("$b", 5, 3) || substr("$a[6]", 0, 3) == substr("$b", 5, 3)){
        echo $b;
        echo "中兩百"."<br>";
    }else{
        echo $b;
        echo "沒中!!!"."<br>";
    }
    
}
