<?php
include 'connect.php';
?>
<?php
include 'navbar.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <table class="table my-5">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên</th>
          <th scope="col">Email</th>
          <th scope="col">Số Điện Thoại</th>
          <th scope="col">Mật Khẩu</th>
          <th scope="col">Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) { // Thêm biến $row để lấy dữ liệu từ kết quả truy vấn
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo '
     <tr>
  <th scope="row">' . $id . '</th>
  <td>' . $name . '</td>
  <td>' . $email . '</td>
  <td>' . $mobile . '</td>
  <td>' . $password . '</td>
  <td>
  <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light text-decoration-none">Cập Nhật</a></button>
  <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light text-decoration-none">Xóa</a></button>
  </td>
</tr>
    ';
          }
        } else {
          echo '<h1>No user data</h1>'; // Hiển thị thông báo khi không có dữ liệu
        }
        ?>

      </tbody>

    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>


</html>