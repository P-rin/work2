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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php 
if(!isset($_SESSION['id'])){
?>
<body>
    <div class="contianer">
    <h1 class="center"> web prin</h1>
    <?php include "nav.php"; ?>
    <hr>
    <div class="d-flex">
        <div>
            <label>หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                    --ทั้งหมด--
                </button>
                <ul class="dropdown-menu" aria-labelledby="button">
                    <li><a href="#">ทั้งหมด</a></li>
                    <li><a href="#">เรื่องเรียน</a></li>
                    <li><a href="#">เรื่องทั่วไป</a></li>
                </ul>
            </span>
        </div>
    </div>
        <br>
        <table class="table table-striped">
        <?php for($i=1;$i<=10;$i++){
            echo "<tr><td><a href=post.php?id=$i style=text-decoration:none>กระทู้$i</a></td></tr>";
            }
        ?>
        </table>
    </div>
        </body>
        <?php } else{ ?>
                <body>
                <div class="contianer">
                    <h1 class="center"> web prin</h1>
                    <?php include "nav.php"; ?>
                    <hr>
                    <form>หมวดหมู่:<select name="menu">
                    <option value="all">--ทั้งหมด--</option>
                    <option value="nomal">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                    </select>
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
        </div>
        </body>
        <?php } ?>
</html>