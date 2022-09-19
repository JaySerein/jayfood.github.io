<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="Lib/css/style.css">
  <title>JayFoodStore.</title>
</head>

<body>
  <?php include 'View/header.php'; ?>

  <div class="home-bg">
    <section class="home">
      <div class="content">
        <span>Hương vị tuyệt với</span>
        <h3>Mời bạn thưởng thức</h3>
      </div>
    </section>
  </div>

  <section class="new">
    <div class="container py-5">
      <div class="row justify-content-around pt-5">
        <div class="col-md-12">
          <div class="row text-center">
            <div class="col-md-4">
              <img src="Lib/img/icon-1.png" class="img-fluid mb-3"  width="50%"  alt="">
              <h4>Ngon, Bổ, Rẻ</h4>
            </div>
            <div class="col-lg-4">
              <img src="Lib/img/icon-2.webp" class="img-fluid mb-3"  width="50%"  alt="">
              <h4>Giao hàng tận nơi</h4>
            </div>
            <div class="col-lg-4">
              <img src="Lib/img/icon-3.png" class="img-fluid mb-3"  width="50%"  alt="">
              <h4>Tươi sống, sạch</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <Section class="products">
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-5 m-auto text-center">
          <h1>Món ăn nổi bật</h1>
          <h4 style="color: #27ae60; ">Những món ăn được khách hàng yêu thích</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
          <button id="btn-add-cart" class="fa-solid fa-cart-plus"></button>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
          <button id="btn-add-cart" class="fa-solid fa-cart-plus"></button>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
          <button id="btn-add-cart" class="fa-solid fa-cart-plus"></button>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
          <button id="btn-add-cart" class="fa-solid fa-cart-plus"></button>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 text-center m-auto mb-3 mt-5">
          <button class="btn-more">Xem Thêm</button>
        </div>
      </div>
    </div>
  </Section>

  <section class="about">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-lg-8 m-auto text-center">
          <h1>JayFood Xin Chào</h1>
          <h4 style="color: #27ae60; ">Ẩm thực đi chùng niềm vui của khách hàng</h4>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-4">
          <img src="Lib/img/about-1.jpg" class="img-fluid" alt="">
          <h3 class="my-3" style="font-weight: 500 ; color: #27ae60;">Thực Phẩm Tươi Sống</h3>
          <h5>Các nguyên liệu được chúng tôi lựa chọn, kiểm tra kĩ càng về mức độ tươi sống, vệ sinh từ các nguồn cung uy tín, chất lượng</h5>
        </div>
        <div class="col-lg-4">
          <img src="Lib/img/about-2.jpg" class="img-fluid" alt="">
          <h3 class="my-3" style="font-weight: 500 ; color: #27ae60;">Chế Biến Kì Công</h3>
          <h5>Món ăn được chế biến công phu, kĩ thuật do các đầu bếp được đào tạo bài bản. Đem đến cho thực khách một hương vị tuyệt nhất</h5>
        </div>
        <div class="col-lg-4">
          <img src="Lib/img/about-3.jpg" class="img-fluid" alt="">
          <h3 class="my-3" style="font-weight: 500 ; color: #27ae60;">Bày Trí Đẹp Mắt</h3>
          <h5>Mỗi món ăn đều được trang trí bắt mắt, sinh động giúp thực khách kích thích thị giác mang lại cảm giác ngon hơn khi thưởng thức</h5>
        </div>
      </div>
    </div>
  </section>

  <Section class="shop">
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-5 m-auto text-center">
          <h1>Thực đơn</h1>
          <h4 style="color: #27ae60; ">Lựa chọn những món ngon cho bữa ăn của bạn</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card border-0 bg-light mb-2">
            <div class="card-body">
              <img src="Lib/img/food/food-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <h4>Phở Bò</h4>
          <p>Giá: <span>40</span>K</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 text-center m-auto mb-3">
          <button class="btn-more">Xem Thêm</button>
        </div>
      </div>
    </div>
  </Section>

  <section class="vote py-5" id="vote">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-5 m-auto text-center">
          <h1>Góp Ý - Đánh Giá</h1>
          <h4 style="color: #27ae60; ">Gửi cho chúng tôi suy nghĩ của bạn</h4>
        </div>
      </div>
      <div class="row justify-content-around">
        <form class="col-md-6" action="reg.php" method="post">
          <div class="form-group-vote">
            <textarea name="msg" class="box" required placeholder="lời nhắn ..." cols="30" rows="10"></textarea>
            <input type="submit" value="Gửi" class="btn btn-block col-12" name="btn-login">
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include 'View/footer.php'; ?>

  <script src="Lib/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>