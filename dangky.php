<?php
    // session_start();
    // if(isset($_SESSION['username'])){ 
   
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font/css/fontawesome.min.css">
<title>Khoa Công Nghệ Thông Tin-Trường Đại Học Thủy Lợi</title>
</head>
<body>
<div class="container-fluid">
<?php
 include 'header.php'; 
?>
    <div class="container">
        <div class="row text-center">
            <h2>Đăng Ký Người Dùng</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center thongbaoloi">
                <?php
                    require('connect.php');
                    if(isset($_POST['submit'])){
                        if(empty($_POST['username']) or empty($_POST['password'])){
                            echo ' <p style="color:red">Vui lòng không để trống</p> ';
                        }else{
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $password2 = $_POST['password2']; 
                            //Số lý tự phải >4
                            if(strlen($username) < 4 or strlen($password) < 4){
                                echo '<p style="color:red"> Username và Password phải nhiều hơn 4 ký tự </p> ';
                            }else{
                                if($password2 != $password){
                                    echo '<p style="color:red"> Password không trùng nhau </p>';
                                }else{
                                    $sql = "SELECT * FROM users WHERE username='$username'"; 
                                    $query = mysqli_query($conn, $sql);
                                    $num = mysqli_num_rows($query);
                                    if($num == 0){
                                        $sql2 = "INSERT INTO users(username,password) VALUE('$username','$password') ";
                                        $them = mysqli_query($conn,$sql2);
                                        if($them){
                                            echo '<p style="color:blue"> Thêm thành công </p>';
                                        }else{
                                            echo '<p style="color:red"> Thêm không thành công </p>';
                                        }
                                    }else{
                                        echo '<p style="color:red"> Người dùng đã tồn tại </p>';
                                    }
                                }
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control" placeholder="Username" >
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại Password</label>
                        <input type="password" name="password2" id="" class="form-control" placeholder="Nhập lại password" >
                    </div>
                    <button type="submit" name="submit" id="" class="btn btn-primary">Đăng Ký</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php
    //  }else{
    //     header('location: login.php');
    // }
?>