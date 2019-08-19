@$username=$_POST['username'];
$query= mysqli_query($conn,"select * from users where username='$username'");
$run=mysqli_fetch_array($query);
$lever=$run['lever'];