<?php session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center ;">web prin</h1>
    <hr>
    <table align="center">
            <form>
            <tr><td><?php echo "ผู้ใช้ : $_SESSION[username]"; ?></td></tr>
            <tr ><td>หมวดหมู่:</td><td><select name="menu">
                <option value="all">--ทั้งหมด--</option>
                <option value="nomal">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option></select></td></tr>
            <tr ><td>หัวข้อ : </td><td><input type="text" name="text"></td></tr>
            <tr ><td>เนื้อหา : </td><td><textarea name="ta"  cols="30" rows="10"></textarea></td></tr>
            <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
            </form>
        </table>
</body>
</html>