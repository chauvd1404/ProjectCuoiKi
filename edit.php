<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<script src="js/doipass.js"></script>
<script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="css/css_login.css">

<title>Khoa Công Nghệ Thông Tin-Trường Đại Học Thủy Lợi</title>
</head>
<body>
<div class="container_fluid">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center thongbaoloi">
      
    </div>
  </div>
  <div class="container">
    <div class="col-md-6 col-md-offset-3 " id="edit_user">
      <h2>Xin chào Bạn đang thay đổi mật khẩu</h2>
      <form action="./edit.php?action=edit" method="post" role="form" id="formChangePass">
          <label for="password"><b>Mật khẩu cũ</b></label>
          <input type="password" placeholder="Enter Username" name="old_pass" class="form-control" >

          <label for="password"><b>Mật khẩu mới</b></label>
          <input type="password" placeholder="Enter Password" id="new_pass" >

          <label for="password"><b>Nhập lại mật khẩu </b></label>
          <input type="password" placeholder="Enter New Password" id ="re_new_pass" >
              
          <button type="submit" name="change_pass" id="change_pass" class="btn btn-primary">Save</button>
          
        </div>
      </form>
    </div>  
  </div>
</body>
</html>
