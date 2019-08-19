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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Khoa Công Nghệ Thông Tin-Trường Đại Học Thủy Lợi</title>
</head>
<body>
<div class="container-fluid">
<?php
 include 'header_admin.php'; 
?>
<div align="center">
<div class="container">
<div class="row ">
        <h2>DANH SÁCH THÀNH VIÊN</h2>        
    </div>
    <div class="row ">
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Lever</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require('connect.php');
                        $sql = "SELECT * FROM users";
                        $query = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($query);
                        if($num>0){
                            while($row = mysqli_fetch_array($query)){
                    
                    ?> 
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['lever']; ?></td>
                        <td><a href="" title=""><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a class="xoa" href="xoa.php?id=<?php echo $row['id']?>" title=""><i class="fa fa-trash"></i></a></td>
                    </tr> 
                    <?php         
                            }
                        }else{
                            echo 'Không có dữ liệu';
                        }                   
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
 include 'footer.php';
?>  
</div>
</body>
</html>
    