<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ Hàng</title>
  <link rel="stylesheet" href="./cart.css">
  <link rel="stylesheet" href="./index.css">  
 
</head>
<body>
  <!-- bắt đầu -->
  <header>
    <div class="header-1">
      <section class="right">
        <img  src="./img/logo1.png" alt="">
        <a href="./gioithieu.php">Về ShineONE</a>
      </section>

      <section class="left">
        <a href="./lienhe.php">Trung tâm CSKH</a>
        <a href="./login.php">Đăng nhập</a>
      </section>

    </div>

    <div class="header-2">
      <a href="">[HOT] Kho quà tự chọn cho đơn từ 390K <a style="text-decoration: underline;cursor: pointer; ">Lấy quà ngay</a></a>
      <img src="./img/right-arrow.png" alt="">
    </div>


  </header>

  <nav>
      <a href="./index.php"><img class="logo" src="./img/logo.png" alt=""></a>
      <div>
        <section class="tab">
          <a href="./sale.php"><b style="color: rgb(214, 45, 45);">OUTLET</b></a>
          <a href="./sanpham.php">SẢN PHẨM</a>
          <a href="">ĐỒ THỂ THAO</a>
          <a href="">MẶC HẰNG NGÀY</a>
          <a href="">ĐỒ GIỮ NHIỆT</a>
        </section>


        <section class="tab-2">
          <a class="search" href=""><img src="./img/search-analytics.png" width="20px" style="margin-right: 10px;transform: translateY(4px);" alt="">Tìm kiếm sản phẩm... </a>
          <span>
            <a href="./thongtintaikhoan.php"><img src="./img/user.png" alt=""></a>
            <a href=""><img src="./img/shopping-bag.png" alt=""></a>
          </span>
        </section>
      </div>
  </nav>
  <!-- Banner -->
  <div class="banner">
    <p>Tham gia CoolClub để nhận <b>30.000 CoolCash</b> và voucher -15% cho đơn hàng đầu tiên!</p>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <!-- Giỏ hàng -->
    <section class="cart">
      <h1>Giỏ hàng</h1>
      <div class="cart-items">
        <!-- Sản phẩm 1 -->
        <div class="cart-item">
          <img src="./img/24CMAW.QD006_-_IMG_3727-_BE_KAKI.webp" alt="Áo sơ mi dài tay" class="product-image">
          <div class="product-info">
            <h4>Áo sơ mi dài tay cổ tàu Premium Poplin</h4>
            <p>Xanh Blue Night / S</p>
          </div>
          <div class="quantity">
            <button aria-label="Giảm số lượng">-</button>
            <input type="number" value="1" class="quantity-input">
            <button aria-label="Tăng số lượng">+</button>
          </div>
          <div class="price">
            <p>404.000đ</p>
            <p class="original-price">449.000đ</p>
          </div>
          <button class="remove" aria-label="Xóa sản phẩm">Xóa</button>
        </div>

        <!-- Sản phẩm 2 -->
        <div class="cart-item">
          <img src="./img/24CMAW.QD006_-_IMG_3727-_BE_KAKI.webp" alt="Quần Dài Nam Kaki Excool" class="product-image">
          <div class="product-info">
            <h4>Quần Dài Nam Kaki Excool</h4>
            <p>Xám Đen / L</p>
          </div>
          <div class="quantity">
            <button aria-label="Giảm số lượng">-</button>
            <input type="number" value="1" class="quantity-input">
            <button aria-label="Tăng số lượng">+</button>
          </div>
          <div class="price">
            <p>499.000đ</p>
          </div>
          <button class="remove" aria-label="Xóa sản phẩm">Xóa</button>
        </div>
      </div>
    </section>

    <!-- Thông tin đặt hàng -->
    <section class="order-info">
      <h2>Thông tin đặt hàng</h2>
      <div class="form-group">
        <label for="name">Họ và tên</label>
        <input type="text" id="name" placeholder="Nhập họ tên của bạn">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Theo dõi đơn hàng sẽ được gửi qua Email">
      </div>
      <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="text" id="phone" placeholder="Nhập số điện thoại của bạn">
      </div>
      <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" id="address" placeholder="Địa chỉ (VD: 103 Vạn Phúc, phường Vạn Phúc)">
      </div>
    </section>
  </div>

  <!-- Thanh toán -->
  <section class="checkout-summary">
    <div class="summary-item">
      <span class="label">Tạm tính:</span>
      <span class="value">903.000đ</span>
    </div>
    <div class="summary-item">
      <span class="label">Giảm giá:</span>
      <span class="value">0đ</span>
    </div>
    <div class="summary-item">
      <span class="label">Phí giao hàng:</span>
      <span class="value">Miễn phí</span>
    </div>
    <hr>
    <div class="summary-item total">
      <span class="label">Tổng:</span>
      <span class="value">903.000đ</span>
    </div>
    <div class="checkout-action">
      <p>Đăng nhập để hoàn <b>10.000 CoolCash</b> | Tiết kiệm <b>244.000đ</b></p>
      <a href="./checkout.php">
    <button class="checkout-btn">THANH TOÁN</button>
</a>
    </div>
  </section>
 <script src="script.js"></script>
  <!-- Phần cuối -->
<footer class="footer">
  <div class="footer-top">
      <div class="footer-intro">
          <h2>ShinONE lắng nghe bạn!</h2>
          <p>Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách
          <br>hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.<br> </p>
          <button class="feedback-button">Đóng góp ý kiến</button>
      </div>
      <div class="footer-contact">
          <p>Hotline</p>
          <p>1900.341504 - 099.7777.6666</p>
          <p>(8:30 - 22:00)</p>
          <p>Email</p>
          <p>ShineONE@shineone.com</p>
          <!-- <div class="social-icons">
              <a href=""><img src="./img/mceclip2_68.png"></a>
              <a href="#"><img src="./img/mceclip1_43.png" alt="Zalo"></a>
              <a href="#"><img src="./img/mceclip0_62.png" alt="TikTok"></a>
              <a href="#"><img src="./img/icon-instar.svg" alt="Instagram"></a>
              <a href="#"><img src="./img/icon-youtube.svg" alt="YouTube"></a>
          </div> -->
      </div>
  </div>
  <div class="footer-links">
      <div>
          <h3>SHINCLUB</h3>
          <ul>
              <li><a href="#">Đăng kí thành viên</a></li>
              <li><a href="#">Ưu đãi & Đặc quyền</a></li>
          </ul>
          <h3>TÀI LIỆU - TUYỂN DỤNG</h3>
          <ul>
              <li><a href="#">Tuyển dụng</a></li>
              <li><a href="#">Đăng ký bản quyền</a></li>
          </ul>
      </div>
      <div>
          <h3>CHÍNH SÁCH</h3>
          <ul>
              <li><a href="#">Chính sách đổi trả 60 ngày</a></li>
              <li><a href="#">Chính sách khuyến mãi</a></li>
              <li><a href="#">Chính sách bảo mật</a></li>
              <li><a href="#">Chính sách giao hàng</a></li>
          </ul>
          <h3>SHINEONE.COM</h3>
          <ul>
              <li><a href="#">Lịch sử thay đổi website</a></li>
          </ul>
      </div>
      <div>
          <h3>CHĂM SÓC KHÁCH HÀNG</h3>
          <ul>
              <li><a href="#">Trải nghiệm mua sắm 100% hài lòng</a></li>
              <li><a href="#">Hỏi đáp - FAQs</a></li>
          </ul>
          <h3>KIẾN THỨC MẶC ĐẸP</h3>
          <ul>
              <li><a href="#">Hướng dẫn chọn size</a></li>
              <li><a href="#">Blog</a></li>
          </ul>
      </div>
      <div>
          <h3>VỀ SHINEONE</h3>
          <ul><li><a href="#">Quy tắc ứng xử của ShineONE</a></li>
            <li><a href="#">ShineONE 101</a></li>
            <li><a href="#">DVKH xuất sắc</a></li>
            <li><a href="#">Câu chuyện về ShineONE</a></li>
            <li><a href="#">Nhà máy</a></li>
            <li><a href="#">Care & Share</a></li>
            <li><a href="#">Cam kết bền vững</a></li>
        </ul>
    </div>
    <div>
        <h3>ĐỊA CHỈ LIÊN HỆ</h3>
        <p><strong>Văn phòng Đà Nẵng:</strong> Tầng 3 Tòa nhà BMM, KM2, Đường Phùng Hưng, Phường Phúc La, Quận Hà Đông, TP Đà Nẵng</p>
        <p><strong>Trung tâm vận hành Đà Nẵng:</strong> Lô C8, KCN Lại Yên, Xã Lại Yên, Huyện Hoài Đức, Thành phố Đà Nẵng</p>
        <p><strong>Văn phòng và Trung tâm vận hành TP.HCM:</strong> Lô C3, đường D2, KCN Cát Lái, Thạnh Mỹ Lợi, TP. Thủ Đức, TP. Hồ Chí Minh</p>
        <p><strong>Trung tâm R&D:</strong> T6-01, The Manhattan Vinhomes Grand Park, Long Bình, TP. Thủ Đức</p>
    </div>
  </div>
</footer>
</body>
</html>
