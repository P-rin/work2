<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style type="text/css">
        .center{text-align: center;}
        .left{text-align: left;}
        .right{text-align: right;}
    </style>
</head>
<?php 
if(!isset($_SESSION['id'])){
?>
<body>
    <h1 class="center"> web prin</h1>
    <hr>
    <form>หมวดหมู่:<select name="menu">
        <option value="all">--ทั้งหมด--</option>
        <option value="nomal">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
        </select>
        <a href="login.php" style="float: right;"><ins>เข้าสู่ระบบ</ins></a></form>
        <a href="newpost.php"><ins>สร้างกระทู้ใหม่</ins></a>
        <br>
        <ul>
        <?php for($i=1;$i<=10;$i++){
            echo "<li><a href=post.php?id=$i>กระทู้$i</a></li>";
            }
        ?>
        </ul>
        </body>
        <?php } else{ ?>
                <body>
                <h1 class="center"> web prin</h1>
                <hr>
                <form>หมวดหมู่:<select name="menu">
                <option value="all">--ทั้งหมด--</option>
                <option value="nomal">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
                </select>
                <div style="float:right;"><?php 
                echo "ผู้ใช้งานระบบ : $_SESSION[username] " ?>&nbsp;&nbsp;
                <a href="logout.php"><ins>ออกจากระบบ</ins></a></form></div>
                <a href="newpost.php"><ins>สร้างกระทู้ใหม่</ins></a>
                <br>
                <ul>
                <?php for($i=1;$i<=10;$i++){
                    if($_SESSION['role']=='a'){
                        echo "<li><a href=post.php?id=$i>กระทู้$i</a> <a href=delete.php?id=$i> ลบ</a></li>";
                    }
                    else { 
                        echo "<li><a href=post.php?id=$i>กระทู้$i</a></li>";
                    }
                }
        ?>
        </ul>
        </body>
        <?php } ?>
</html>