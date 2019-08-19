<?php
    session_start();
    // if(!isset($_SESSION['username'])){
    //     header('location:login.php');  
    // }else{
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
    <header class="container">
      <img src="images/logo123.jpg" alt="">
      <h6> <b>Xin Chào <?php echo $_SESSION['username'] ?> !</b > </h6>
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
            <a class="dropdown-item" href="#">Tài Liệu Sinh Viên</a>
            <a class="dropdown-item" href="#">Tổ Tư Vấn Học Tập</a>
            <a class="dropdown-item" href="#">Biểu Mẫu ĐATN</a>
            <a class="dropdown-item" href="#">Luận Văn Tốt Nghiệp</a>
            </div>
        </li><li class="nav-item">
            <a class="nav-link" href="logout.php" >Đăng Xuất</a>
        </li><div class="dropdown open">
            <button  class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản Trị</button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <button class="dropdown-item" href="#">Quản lí bài giảng</button>
                <button class="dropdown-item " href="#">Điểm danh sinh viên</button>
            </div>
        </div>
        </ul>
    </div>
    </nav>
        </header>
        <!-- Slide -->
        <section>
        <div class= "container">
            <div class="row">
            <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/anhtruong0.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/anhtruong1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/anhtruong2.jpg" alt="Third slide">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
            </div>
        </div>
        </section>
        <section>
        <div class="container"id ="sukien1">
        </i><b><p id = "sukien-title">Sự Kiện</p></b>
            <div class="row"id="sukien">
            <div class="col-xs-12 col-sm-6 col-md-4"><h4 style="color:red">Văn NGhệ</h4>
                <b style="color:blue">Văn Nghệ Chào mừng Tân Sinh Viên</b>
                <p>Thời Gian:19h-Ngày 30-8-2019</p>
                <p>Địa Điểm: hội trường T45</p>
                <P> Khoa Công Nghệ Thông Tin</P>
                <img src="images/vannghe.jpg" alt="" width = "100%" height = " 150px">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4"><h4 style="color:red"> Chung kết  bóng đá khoa</h4>
                <b style="color:blue">Giải Bóng đá khoa CNTT</b>
                <p>Thời Gian:14h-Ngày 29-9-2019</p>
                <p>Địa Điểm:Sân bóng trường</p>
                <p>58TH1-58Th2</p>
                <img src="images/bongda.png" alt="" width = "100%" height = " 150px">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4"><h4 style="color:red">Thi chuẩn đầu ra A2</h4>
                <p style="color:blue"><b>Thông báo một số thông tin về chuẩn đầu ra tiếng Anh (A2) cho sinh viên đại học hệ chính quy Trường Đại học Thủy lợi</b></p>
                <p>xem chi tiết tại link:</p>
                <a href="http://www.tlu.edu.vn/quy-phat-trien-khoa-hoc-cong-nghe/thong-bao-mot-so-thong-tin-ve-chuan-dau-ra-tieng-4920">Chuẩn đầu ra A2</a>
                <img src="images/a22.jpg" alt="" width = "100%" height = " 150px">
            </div>
            </div>
        </div>
        </section>
        <section>
        <div class="container">
            <div class="row" id="tintuc">
            <div class="col-md-9"id="tintucthuong">
                <h1>Tin Tức</h1>
                <div class= "row">
            <div class="col-xs-12 col-sm-6 col-md-4"><a href="#">KẾT QUẢ NGHIÊN CỨU SINH VIÊN LẦN THỨ 32</a>
            <P>&nbsp;&nbsp;&nbsp;</P>
            <img src="images/ketquanghiencukhoahoc.jpg" alt="" height ="150px" width ="100%">
            <P>&nbsp;&nbsp;&nbsp;</P>
            <div class="content">
                <p style="font-family: 'Open Sans',sans-serif;font-size: 13px;line-height: 1.7;">Hội nghị khoa học thường niên của sinh viên khoa Công nghệ thông tin được tổ chức vào ngày  22/3/2019 tại khu hội thảo Quốc tế K1 Trường Đại học Thủy lợi. Đây là hoạt động thường niên được khoa CNTT tổ chức định kì hàng năm. Vượt qua gần 20 đề tài, năm nay 11 đề tài được chọn báo cáo trong ngày hội NCKH, được chia làm hai tiểu ban.</p>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4"><a href="#">CÔNG BỐ QUYẾT ĐỊNH  BỔ NHIỆM VIỆN CHỨC QUẢN LÝ CẤP BỘ MÔN KHOA CNTT</a>
                <img src="images/congboquyetdinh.jpg" alt="" height ="150px" width ="100%">
                <P>&nbsp;&nbsp;&nbsp;</P>
                <div class="content">
                <p style="font-family: 'Open Sans',sans-serif;font-size: 13px;line-height: 1.7;">Trong những ngày đầu tháng 1 năm 2019, thừa ủy quyền của Hiệu trưởng trường Đại học Thủy Lợi, Đảng ủy - Ban Chủ nhiệm khoa Công nghệ thông tin đã tiến hành trao quyết định bổ nhiệm chức vụ Trưởng Bộ môn Toán học cho TS Nguyễn Hữu Thọ, Phó trưởng Bộ môn Toán học cho TS Đỗ Lân, ...</p>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4"> <a href="#">SINH VIÊN KHOA CNTT GIAO LƯU VỚI CÔNG TY QUALICA NHẬT BẢN</a>
            <p>&nbsp;&nbsp;&nbsp;</p>
            <img src="images/sinhviengiaoluu.jpg" alt="" height ="150px" width ="100%">
            <P>&nbsp;&nbsp;&nbsp;</P>
            <p style="font-family: 'Open Sans',sans-serif;font-size: 13px;line-height: 1.7;">(TLU) – Chiều ngày 23/04/2018, tại Trường Đại học Thủy lợi diễn ra buổi giao lưu giữa sinh viên Khoa CNTT với các lãnh đạo và nhân viên của công ty Qualica đang làm việc tại Nhật Bản</p>
            </div>
            </div>
            </div>
            <div class="col-md-3"id="tinnoibat">
                <h1>Tin nổi Bật</h1>
                <div class= "row">
                <div class="col-md-4"><img src="images/sudungfacebook.png" alt=""width="100%" height ="50px"></div>
                <div class=" col-md-8"><a href="#">Hội thảo "Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng facebook"</a></div>
                <div class='col-md-12'><p>&nbsp;&nbsp;&nbsp;</p></div>
                <div class=" col-md-4"><img src="images/kithoathaunhoptac.jpg" alt=""width="100%" height ="50px"></div>
                <div class=" col-md-8"><a href="#">Khoa Công nghệ thông tin ký kết thoả thuận hợp tác với công ty công nghệ NashTech</a></div>
                <div class='col-md-12'><p>&nbsp;&nbsp;&nbsp;</p></div>
                <div class=" col-md-4"><img src="images/3trong4sinhvien.jpg" alt=""width="100%" height ="50px"></div>
                <div class=" col-md-8"><a href="#">3 trong 4 sinh viên Trường Đại học Thủy lợi đạt giải tại Olympic Tin học toàn quốc là tân sinh viên Khóa 60</a></div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- footer -->
        <section >
        <div class="container">
            
    <footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container text-center text-md-left" id = "footer">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
        <!-- Links -->
        <ul class="list-unstyled">
            <li>
            <a href="gioithieu.php">Giới Thiệu</a>
            </li>
            <li>
            <a href="logokhoacntt.php">Logo của khoa CNTT</a>
            </li>
            <li>
            <a href="loichaomung.php">Lời Chào Mừng</a>
            </li>
            <li>
            <a href="#!">Tổ Chức</a>
            </li>
            <li>
            <a href="#!">Hợp Tác Liên Kết</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

        <!-- Links -->


        <ul class="list-unstyled">
            <li>
            <a href="#!">Đào Tạo</a>
            </li>
            <li>
            <a href="#!">Mô Hình Đào Tạo</a>
            </li>
            <li>
            <a href="#!">Đào Tạo Đại Học</a>
            </li>
            <li>
            <a href="#!">Định Hướng Nghề Nghiệp</a>
            </li>
            <li>
            <a href="#!">Đào Tạo Sau Đại Học</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

        <!-- Links -->


        <ul class="list-unstyled">
            <li>
            <a href="#!">NGhiên Cứu Khoa Học</a>
            </li>
            <li>
            <a href="#!">Thông Tin Senminar</a>
            </li>
            <li>
            <a href="#!">Các Đề Tài Dự Án</a>
            </li>
            <li>
            <a href="#!">Công Trình Công Bố</a>
            </li>
            <li>
            <a href="#!">Các Phòng Thí Nghiệm</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

        <!-- Links -->


        <ul class="list-unstyled">
            <li>
            <a href="#!">Công Nghệ Phần Mền</a>
            </li>
            <li>
            <a href="#!">Hệ Thống Thông Tin</a>
            </li>
            <li>
            <a href="#!">Khoa Học Máy Tính</a>
            </li>
            <li>
            <a href="#!">Kĩ Thuật Máy Tính Và Mạng</a>
            </li>
            <li>
            <a href="#!">Toán Học</a>
            </li>
            <li>
            <a href="#!">Trung Tâm Tin Học</a>
            </li>
        </ul>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div  id ="coppy">
    <div class= "row">
    <div class="col-xs-12 col-sm-6 col-md-3">
    <img src="images/logofooter.png" alt="" style="background:blue" width= "100%" height ="100px">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-9">
    <p> 2017 Khoa Công nghệ thông tin - Đại học Thủy lợi</p>
    <p>Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024 3 5632211. Email: vpkcntt@tlu.edu.vn</p>
    </div>

    </div>
    </div>


    <!-- Copyright -->

    </footer>
    <!-- Footer -->

        </div>


    </section>
    </body>
    </html>
<?php      
    // }
?>