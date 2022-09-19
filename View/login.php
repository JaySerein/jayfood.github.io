<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Lib/css/style.css">

  <title>Đăng Nhập</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-around">
      <form class="col-md-6 bg-light p-4 my-3" action="reg.php" method="post" style="border: 1px solid #27ae60; border-radius: 15px;">
        <h1 class="text-center text-uppercase h3 py-3">Đăng Nhập</h1>
        <div class="form-group">
          <input type="text" name="email" id="email" class="form-control" placeholder="email" required>
          <input type="text" name="password" id="password" class="form-control" placeholder="mật khẩu" required>
          <input type="submit" value="Đăng Nhập" class="btn btn-block col-12" name="btn-login">
        </div>
        <h5 class="text-center py-3">bạn chưa có tài khoản? <a href="../View/register.php" style="color: #27ae60 ;">Đăng kí ngay</a> </h5>
      </form>
    </div>
  </div>
</body>

</html>