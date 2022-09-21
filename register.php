<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style type="text/css">
        .center{
            text-align: center;
        }

    </style>
</head>
<body>
    <h1 class="center">สมัครสมาชิก</h1>
    <hr>
    <table align="center" style="border:2px solid black ;width: 40%;" >
       <form>
        <tr style="background-color: #6cd2fe"><td colspan="2">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text" name="username"></td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="password" name="password"></td></tr>
        <tr><td rowspan="3">เพศ:</td> </tdrowspan="3"><td><input type="radio" name="gender" value="m">ชาย</td></tr>
        <tr><td><input type="radio" name="gender" value="f">หญิง</td></tr>
        <tr><td><input type="radio" name="gender" value="a">อื่นๆ</td></tr>
        <tr><td>อีเมล:</td><td><input type="text" name="email"></td></tr>
        <tr class="center"><td colspan="2"><input type="submit" value="สมัครสมาชิก"></td></tr>
       </form>
    </table>
    <p class="center"><a href="index.php">กลับไปหน้าหลัก</a></p>
</body>
</html>