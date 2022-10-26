<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
    <?php
    session_start();
     if(isset($_SESSION['id'])){
        header("Location: index.php");
        die();
    }
    ?>
    <h1 style="text-align: center;">Register</h1><br>
    <?php include "nav.php" ?>
    <hr>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if($_SESSION['add_login'] == 'error'){
                echo "<div class = 'alert alert-danger'>ชื่อบัญชีนี้ถูกใช้ไปแล้ว</div>";
                unset($_SESSION['add_login']);
                $_SESSION['add_login'] = 'null;';
            }
            ?>
            <div class="card text-dark bg-white border-primary mb-3">
                <div class="card-header bg-primary text-white">กรอกข้อมูล</div>
                <div class="card-body">
                <form action="register_save.php" method="post">
                    <div class="row mb-2">
                        <label class="col-md-3 col-form-label">ชื่อบัญชี:</label>
                        <div class="col-md-9"><input type="text" name="login" class="form-control" required></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-3 col-form-label">รหัสผ่าน:</label>
                        <div class="col-md-9"><input type="password" name="pwd" class="form-control" required></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-3 col-form-label">ชื่อ-นามสกุล:</label>
                        <div class="col-md-9"><input type="text" name="name" class="form-control" required></div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-3 col-form-label">เพศ:</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input type="radio" name="gender" value="m" class="form-check-input" required><label class="form-check-label">ชาย</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" value="f" class="form-check-input" required><label class="form-check-label">หญิง</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" value="o" class="form-check-input" required><label class="form-check-label">อื่นๆ</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">อีเมล:</label>
                        <div class="col-md-9"><input type="text" name="email" class="form-control" required></div>
                    </div>
                    <center><button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save"></i> สมัครสมาชิก</button></center>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
    </div>
</body>
</html>