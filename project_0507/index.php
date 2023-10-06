<?php
//登入頁面

// Start the session
session_name('homework');
session_start();

?>


<html>
<head>
    <title>Login </title>
    <style>
        .div{
            display: flex;
            justify-content: center;    
            align-content: center;      
            flex-wrap: wrap;
        }
    </style>

</head>
<body>
    <br>
    <br>
    <div class=div>
        <img src="https://tdbh.hanwei-hanya.com/wp-content/uploads/%E9%80%A2%E7%94%B2%E5%A4%A7%E5%AD%B8_Logo-1.png" alt="fcu" style="width:300px;">
    </div>
    <br>
    <div class=div>
        <h1>選課系統</h1>
    </div>

    <div class=div>
        <form name="form1" method="post" action="check.php" >
        請輸入學號: <br> <input name="MyHead">

        <br>
        <br>

        <form name="form2" method="post" action="check.php" >
        請輸入密碼: <br> <input name="password">

        <br>
        <br>
        <input type="submit" value="登入">
        </form>
    </div>
    

</body>


