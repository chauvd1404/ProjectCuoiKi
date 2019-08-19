<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:admin_page.php');  
    }else{
            
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/css_login.css">
</head>
<body>
<div class="container_fluid">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center thongbaoloi">
    <?php 
      require('connect.php');
      @$username=$_POST['username'];
      @$password=$_POST['password'];
        if (isset($_POST['submit'])) {
          if (empty($_POST['username']) or empty($_POST['password'])) {
            echo "Nhập vào tên hoặc mật khẩu";
          }
          else{
            $query=mysqli_query($conn,"select * from users where username='$username'");
            $run=mysqli_fetch_array($query);
            $lever=$run['lever'];
            if($lever==1){
              header('location: user.php');
            }elseif ($lever==2) {
              header('location: teacher.php');
            }elseif ($lever==3) {
              header('location: admin_page.php');
            }
          }
        }
    ?>
    
    </div>
  </div>
  <div class="container">
    <div class="col-md-6 col-md-offset-3 ">
      <form action="" method="post" role="form">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" class="form-control">

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" >
              
          <button type="submit" name="submit" id="" class="btn btn-primary">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>  
  </div>
</body>
</html>
<?php
    };
?>