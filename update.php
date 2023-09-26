<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>
<?php
include 'navbar.php'; 
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <form  method="post">
      <div class="form-group mb-3">
        <label>Tên</label>
        <input type="text" class="form-control" placeholder="Nhập tên" name="name" autocomplete="off" value=<?php echo $name;?>>
      </div>
      <div class="form-group mb-3">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Nhập Email" name="email" autocomplete="off" value=<?php echo $email;?>>
      </div>
      <div class="form-group mb-3">
        <label>Mật Khẩu</label>
        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" autocomplete="off" value=<?php echo $password;?>>
      </div>
      <div class="form-group mb-3">
        <label>Số Điện Thoại</label>
        <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Cập Nhật</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>