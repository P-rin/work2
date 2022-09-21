<?php session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1 style="text-align: center;">web prin</h1>
    <hr>
    <table style="border: 2px solid black ;width: 40%;" align="center">
        <form action="verify.php" method="post">
            <tr style="text-align:left;background-color: #6cd2fe;"><td colspan="2"> เข้าสู่ระบบ</td></tr>
            <tr><td>login</td><td><input type="text" name="user"></td></tr>
            <tr><td>Password</td><td><input type="password" name="pass"></td></tr>
            <tr style="text-align:center"><td colspan="2" ><input type="submit" value="login"></td></tr>
        </form>
    </table>
    
    <p style="text-align: center">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php"><ins>กรุณาสมัครสมาชิก</ins></a></p>
</body>
</html>