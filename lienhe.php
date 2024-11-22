<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">    
    <script src="/lienhe.js"></script>
    <style>
      main{
        padding: 0px 25%;
        margin: 100px 0px;
      }
      /* Căn chỉnh toàn bộ form */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  max-width: 800px;
  padding: 20px;
  background-color: #fff;
  position: relative;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
/* Căn chỉnh các phần tử p (container của input, textarea) */
p {
  margin-bottom: 15px;
  width: 100%;
  max-width: 650px;
}

/* Đồng bộ các ô input và textarea */
.txt, textarea {
  width: 100%;
  max-width: 650px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  box-sizing: border-box;
}

textarea {
  height: 150px;
  resize: vertical;
}

/* Fieldset cho giới tính */
fieldset {
  width: 100%;
  max-width: 650px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

/* Nút bấm */
button {
  padding: 10px 50px;
  border-radius: 5px;
  color: #fff;
  background-color: #1644d9;
  border: none;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
}
 
button:hover {
  opacity: 0.8;
}

/* Bố cục toàn trang */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  height: 60%;
}

    </style>
</head>
<body>
  <header>
    <div class="header-1">
      <section class="right">
        <img  src="./img/logo1.png" alt="">
        <a href="./gioithieu.php">Về ShineONE</a>
      </section>

      <section class="left">
        <a href="">Trung tâm CSKH</a>
        <a href="">Đăng nhập</a>
      </section>

    </div>

    <div class="header-2">
      <a href="">[HOT] Kho quà tự chọn cho đơn từ 390K <a style="text-decoration: underline;cursor: pointer; ">Lấy quà ngay</a></a>
      <img src="./img/right-arrow.png" alt="">
    </div>


  </header>

  <nav>
      <a href="./index.html"><img class="logo" src="./img/logo.png" alt=""></a>
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
  <main>
    <form onsubmit="return kiemtra();">
        <h2>ĐÓNG GÓP Ý KIẾN</h2>
        <p>
          <label for="hoten">Họ và tên</label>
          <input type="text" id="hoten" class="txt" />
        </p>
        <p>
          <label for="email">Email</label>
          <input type="email" id="email" class="txt" />
        </p>
        <p>
          <label for="phone">Số điện thoại</label>
          <input type="tel" id="phone" class="txt" />
        </p>
        <fieldset id="fs1">
            <legend>Giới tính</legend>
            <input type="radio" name="phai" value="Nam" /><label>Nam</label>
            <input type="radio" name="phai" value="Nữ" /><label>Nữ</label>
       </fieldset>
        <p>
          <label for="noidung">Nội dung</label>
          <textarea id="noidung"></textarea>
        </p>
        <button type="submit">Gửi</button>
    </form>    
  </main>

   
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
