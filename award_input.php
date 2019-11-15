<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         body{
             font-family:'微軟正黑體',sans-serif;
             background:skyblue;ㄑ

         }
         table{
            text-align:center;
            margin:auto;      
            position:relative;
         }
         td{

             background:pink;
             width:100px;
             height:10px;
             padding:5px;
             text-align:center;
             font-weight:bold;
             border-radius:3px;
             box-shadow:1px 0px 3px white;
         }
         .btn{
            position: absolute;
            top: 35px;
            left:62%;
            background-image:url("./images/2.jpg");
            background-size:cover;
            width:50px;
            height:20px;
            cursor:pointer;
     }
        #period{
            background:#CCBBFF;
            border-radius:5px;
            font-family:'微軟正黑體',sans-serif;
        }

        #p_left{
            position:absolute;
            left: 130px;
            top: 110px;
            z-index:-1;
            width:400px;
            min-width:400px;
            height:500px;
            min-height:500px;
            transform:rotate(45deg);
        }

    
       #p_right{
           position:absolute;
           right:130px;
           top: 110px;
           z-index:-1;
           width:400px;
           min-width:400px;
           height:500px;
           min-height:500px;
           transform:rotate(-45deg);
       }
 
    </style>
</head>
<body>
    <input type="button" class ="btn" onclick="location.href='index.php'">
    <h1><span style="font-family:'微軟正黑體',sans-serif; color:blue; position:relative;left:40%; text-shadow:0px 0px 3px red;;" >統一發票中獎號碼單</span></h1>
        <form action="award_num.php" method="post">
            <table>

                <tbody><tr>
                    <td colspan="3">
                        年度：<input type="number" name="year" id="year">
                    </td>
                </tr>
                <tr>
                    <td>月份</td>
                    <td>
                        <select name="period" id="period">
                            <option value="1">1,2月</option>
                            <option value="2">3,4月</option>
                            <option value="3">5,6月</option>
                            <option value="4">7,8月</option>
                            <option value="5">9,10月</option>
                            <option value="6">11,12月</option>
                        </select>
                    </td>
                    <td>獎金</td>
                </tr>
                <tr>
                    <td>特別獎</td>
                    <td>
                        <input type="number" name="award1">
                    </td>
                    <td>1000萬元</td>
                </tr>
                <tr>
                    <td>特獎</td>
                    <td>
                        <input type="number" name="award2">
                    </td>
                    <td>200萬元</td>
                </tr>
                <tr>
                    <td>頭獎</td>
                    <td>
                        <input type="number" name="award3">
                        <input type="number" name="award4">
                        <input type="number" name="award5">
                    </td>
                    <td>20萬元</td>
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
                    <td>
                        <input type="number" name="award6">
                        <input type="number" name="award7">
                    </td>
                    <td>2百元</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="送出">
                    </td>
                </tr>
            </tbody></table>
        </form>
    <img src="./images/p_left.png" id="p_left">
    <img src="./images/p_right.png" id="p_right">
</body>
</html>
