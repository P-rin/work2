<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <h1 style="text-align: center ;">web prin</h1>
    <hr>
    <div align="center">
        <?php
            $name= $_POST["user"];
            $pass=$_POST["pass"];
            if ($name=="admin"&&$pass=="ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
            }
            elseif ($name=="member"&&$pass=="mem1234"){
                echo "ยินดีต้อนรับคุณ MEMBER";
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']=session_id();
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
        ?>
        <br>
        <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>
    
</body>
</html>