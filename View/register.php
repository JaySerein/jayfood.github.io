<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Lib/css/style.css">

  <title>Đăng Kí</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-around">
      <form class="col-md-6 bg-light p-4 my-3" action="reg.php" method="post" style="border: 1px solid #27ae60; border-radius: 15px;">
        <h1 class="text-center text-uppercase h3 py-3">Đăng kí</h1>
        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control" placeholder="tên tài khoản" required>
          <input type="text" name="email" id="email" class="form-control" placeholder="email" required>
          <input type="text" name="password" id="password" class="form-control" placeholder="mật khẩu" required>
          <input type="text" name="repassword" id="repassword" class="form-control" placeholder="xác nhận mật khẩu" required>
          <input type="submit" value="Đăng Kí" class="btn btn-block col-12" name="btn-reg">
        </div>
        <h5 class="text-center py-3">bạn đã có tài khoản? <a href="../View/login.php" style="color: #27ae60 ;">Đăng nhập ngay</a> </h5>
      </form>
    </div>
  </div>
</body>

</html>