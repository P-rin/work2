<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <h1 align="center">web prin</h1>
    <hr>
    <div align="center">
        <?php echo "ต้องการดูกระทู้หมายเลข " . $_GET["id"];?>
        <p></p>
        <table style="border: 2px solid black ; width:40%;" align="center">
            <form>
            <tr style="text-align: center ;background-color: #6cd2fe"><th>แสดงความคิดเห็น</th></tr>
            <tr align="center"><td><textarea name="comment"cols="50" rows="10"></textarea></td></tr>
            <tr align="center"><td><form><input type="submit" value="ส่งข้อความ"></form></td></tr>
            </form>
        </table>
        <a href="index.html">กลับไปยังหน้าหลัก</a>
    </div>
    
    
</body>
</html>