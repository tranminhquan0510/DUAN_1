<?php
require_once('config.php');
session_start();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Kiểm tra nếu email và mật khẩu không trống
    if (empty($email) || empty($password)) {
        $error = "Vui lòng nhập cả email và mật khẩu!";
    } else {
        // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
        $stmt = $connection->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Kiểm tra mật khẩu
            if (password_verify($password, $user['password'])) {
                // Đăng nhập thành công, lưu thông tin người dùng vào session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role_id'] = $user['role_id'];
                
                // Kiểm tra vai trò của người dùng (admin hoặc user)
                if ($user['role_id'] == 1) {
                    // Nếu là admin, chuyển hướng đến trang admin
                    header("Location: admin.php");
                } else {
                    // Nếu là user, chuyển hướng đến trang chính
                    header("Location: index.php");
                }
                exit();
            } else {
                $error = "Mật khẩu không chính xác!";
            }
        } else {
            $error = "Email không tồn tại!";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShineONE Đăng nhập</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="./index.css">
</head>
<body>
    <!-- bắt đầu -->
    <header>
      <div class="header-1">
        <section class="right">
          <img src="./img/logo1.png" alt="">
          <a href="./gioithieu.php">Về ShineONE</a>
        </section>
  
        <section class="left">
          <a href="./lienhe.php">Trung tâm CSKH</a>
          <a href="./register.php">Đăng ký</a>
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
              <a href="./cart.php"><img src="./img/shopping-bag.png" alt=""></a>
            </span>
          </section>
        </div>
    </nav>
  
  <div class="login-container">
    <div class="logo">
        <img src="img/logo1.png" width="400px" alt="">

    </div>
    <h2 class="sub-title">Rất nhiều đặc quyền và quyền lợi mua sắm đang chờ bạn</h2>

    <div class="login-form">
      <p class="form-title">Đăng nhập tài khoản:</p>

      <!-- Hiển thị lỗi -->
      <?php if (!empty($error)) : ?>
          <div class="error"><?= $error ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <input type="email" name="email" placeholder="Email của bạn" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit" name="login">ĐĂNG NHẬP</button>
      </form>

      <div class="links">
        <a href="./register.php">Đăng ký</a>
        <a href="#">Quên mật khẩu</a>
      </div>
    </div>
  </div>

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