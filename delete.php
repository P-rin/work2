<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
    session_start();
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "DELETE FROM post WHERE id = $_GET[id]";

    $conn->exec($sql);
    $conn = null;
    $_SESSION['delete'] = 'success';
    header("location:index.php");
    die();
    ?>
</body>
</html>