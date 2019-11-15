<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    
     h1{
       color:blue;
       text-shadow: 0px 1px 3px red;
       text-align:center;
     }
    table{
       text-align:center;
       margin:auto;
       
       position:relative;   
    }
    td{
         border:1px solid gray;
         background:black;
         color:white;
         width:100px;
         min-width:100px;
         height:50px;
         min-height:50px;
         border-radius:10px;
         font-size:1.1em;
         text-shadow: 1px 1px 0px red;
         box-shadow: 5px 1px 5px orange;
    }
    a{
         text-decoration:none;
         color: red;
         text-shadow:1px 0px 1px white;
    }

    body{
        font-family:'微軟正黑體',sans-serif;
        background:pink;
    }

    .title{
      padding:3px;
      width:85px;
      height:50px;
      font-size:1.3em;
      border-radius:50%;
    }

    .ct{
      background:red;
      color:white;
      font-size:16px;
      font-weight:bold;
      text-shadow: 0px 2px 2px purple;
      width:50px;
      height:30px;
      border-radius:10px;
     
    }

    #left{
      position:absolute;
      left: 130px;
      top: 150px;
      z-index:-1;
      width:400px;
      min-width:400px;
      height:400px;
      min-height:400px;
      transform:rotate(45deg);
    }

    
    #right{
      position:absolute;
      right:130px;
      top: 150px;
      z-index:-1;
      width:400px;
      min-width:400px;
      height:400px;
      min-height:400px;
      transform:rotate(-45deg);
    }

    </style>
</head>
<body>
<h1>統一發票紀錄與對獎</h1>
<table> 
    <tr>
       <td class="title"><a href="now.php">當期發票</a></td>
       <td class="title"><a href="see1.php">對獎</a></td>
       <td class="title"><a href="award_input.php">輸入獎號</a></td>
    </tr>
</table>
<img src="./images/left.png" id="left">
<img src="./images/right.png" id="right">
<form action="input.php" method="post"> 
<table>
  <tr>
    <td>年份</td>
    <td><input type="text" name="year" id="acc"></td>
  </tr>
  <tr>
    <td>月份</td>
    <td><input type="text" name="mon" id="mon"></td>
  </tr>
  <tr>
    <td>發票號碼</td>
    <td><input type="text" name="num" id="num"></td>
  </tr>
  <tr>
    <td>發票金額</td>
    <td><input type="text" name="money" id="m"></td>
  </tr>
  <tr>
    <td colspan="2">
        <input type="submit" value="輸入" class="ct">
        <input type="reset" value="重置" class="ct">
    </td>
</table>
</body>
</html>