<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div  class="container-fluid">
        <?php include('header_admin.php')?>
    </div>
    <div class="row " style="padding-left:0px">
        <div class="col-sm-2"> </div>
        <div class="col-sm-8">
            <h2 class="h2 text-center">Change Password</h2>
            <form action="change-password.php" method="post" name="regform" id="regform" onsubmit="return checked();">
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Username:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="username" name="username" 
                    placeholder="username" maxlength="60" required
                    value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Current Password:</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password" 
                    placeholder="Password" minlength="8" maxlength="12" required
                    value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password1" class="col-sm-4 col-form-label">New Password:</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="password1" name="password1" 
                    placeholder="Password" minlength="8" maxlength="12" required
                    value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                <span id='message'>Between 8 and 12 characters.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="password2" class="col-sm-4 col-form-label">Confirm Password:</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="password2" name="password2" 
                    placeholder="Confirm Password" minlength="8" maxlength="12" required
                    value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                <input id="submit" class="btn btn-primary" type="submit" name="submit" 
                    value="Change Password">
                </div>
                </div>
                </form>
        </div>
        <aside class="col-sm-2"></aside>
    </div>
</body>
</html>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Đổi mật khẩu</h3>
            <form method="POST" onsubmit="return false;" id="formChangePass">
                <div class="form-group">
                    <label for="user_signin">Mật khẩu cũ</label>
                    <input type="password" class="form-control" id="old_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="new_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" id="re_new_pass">
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-primary" id="submit_change_pass">
                    <span class="glyphicon glyphicon-ok"></span> Thay đổi
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>