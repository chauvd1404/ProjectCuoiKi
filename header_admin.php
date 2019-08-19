<?php
    session_start();
    // if(!isset($_SESSION['username'])){
    //     header('location:login.php');  
    // }else{
?>
    <header class="container">
      <img src="images/logo123.jpg" alt="">
      <h6> <b>Chào mừng đến với khoa CNTT!</b > </h6>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Trang Chủ<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="gioithieu.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Giới Thiệu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="loichaomung.php">Lời Chào Mừng</a>
            <a class="dropdown-item" href="gioithieu.php">Giới Thiệu</a>
            <a class="dropdown-item" href="#">Hợp Tác Và liên kết</a>
            </div>
        </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nghiên Cứu Khoa Học
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Các đề tài dự án</a>
            <a class="dropdown-item" href="#">Thông Tin seminar</a>
            <a class="dropdown-item" href="#">Công trình công bố</a>
            <a class="dropdown-item" href="#">Các phòng thí nghiệm</a>
            </div>
        </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Đào Tạo
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Đào Tạo Đại Học</a>
            <a class="dropdown-item" href="#">Đào Tạo Sau Đại Học</a>
            <a class="dropdown-item" href="#">Chuẩn Đầu Ra</a>
            <a class="dropdown-item" href="#">Định Hướng Nghề Nghiệp</a>
            <a class="dropdown-item" href="#">Mô Hình Đào Tạo</a>
            <a class="dropdown-item" href="#">Đề Cương Môn Học</a>
            </div>
        </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bộ Môn Trung Tâm
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Công Nghệ phần mềm</a>
            <a class="dropdown-item" href="#">Hệ Thống Thông Tin</a>
            <a class="dropdown-item" href="#">Khoa Học Máy Tính</a>
            <a class="dropdown-item" href="#">Kĩ Thuật Máy Tính Và Mạng</a>
            <a class="dropdown-item" href="#">Toán Học</a>
            <a class="dropdown-item" href="#">Tin Học Và Kĩ Thuật Tính Toán</a>
            </div>
        </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tin Tức
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Sự Kiện</a>
            <a class="dropdown-item" href="#">CSE Trên Báo</a>>
            </div>
        </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sinh Viên
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="tailieumonhoc.php">Tài Liệu Sinh Viên</a>
            <a class="dropdown-item" href="#">Tổ Tư Vấn Học Tập</a>
            <a class="dropdown-item" href="#">Biểu Mẫu ĐATN</a>
            <a class="dropdown-item" href="#">Luận Văn Tốt Nghiệp</a>
            </div>
        </li><li class="nav-item">
            <a class="nav-link" href="logout.php" >Đăng Xuất</a>
        </li><div class="dropdown open">
            <button  class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản Trị</button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" type="button" href="#">Quản lí bài giảng</a>
                <a class="dropdown-item " type="button" href="#">Điểm danh sinh viên</a>
                <a class="dropdown-item " type="button" href="quantri.php">Quản lí Admin</a>
            </div>
        </div>
        </ul>
    </div>
    </nav>
    </header>
    
