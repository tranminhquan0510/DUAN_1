
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shine ONE</title>
  <link rel="stylesheet" href="./index.css">
  <script src="model.js"></script>
  <style>
    .background{
        width: 100%;
        height: 620px;
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;

    }
    @keyframes BackG {
      0%{       
        transform: translateX(0%);
      }
      5%{       
        transform: translateX(-100%);

      }
      40%{       
        transform: translateX(-100%);
      }
      45%{       
        transform: translateX(-200%);        
      }

      80%{
        transform: translateX(-200%);  

      }
      81%{
        transform: translateX(0%);
      }

      100%{
        transform: translateX(0%);
      }
    }
    .background img{
        width: 100%;
        height: 600px;
        flex-shrink: 0;
        scroll-snap-align: center;
        object-fit: cover;
        animation: BackG 15s ease infinite 3s;        
    }
        /* width */
        .background::-webkit-scrollbar {
            height: 0px;
            border-radius: 5px;
            background: #5c5ce800;
        }
    .tile span{
      display: flex;
    }
    .tile span div{
      width: 160px;
      height: 60px;
      margin-right: 20px;
      border: 2px solid black;
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .tile span div a{
      color: black;
    }
    .tile span div:hover{
      background-color: black;
    }
    .tile span div:hover a{
      color: rgb(255, 255, 255);
    }
    .background-input{
        width: 100%;
        height: 450px;
        background-image: url('./img/mceclip0_27.webp');
        background-size: cover;
    }
    .background-input-2{
        width: 100%;
        height: 450px;
        background-image: url('./img/mceclip1_9.webp');
        background-size: cover;
    }
    .background-input-3{
        width: 90%;
        height: 400px;
        margin: 0px 5% 50px 5%;
        border-radius: 20px;
        background-image: url('./img/mceclip2_54.jpg');
        background-size: cover;
    }
    @keyframes apper {
      from {
        opacity: 0;
        scale: 0.5;
      }
      to{
        opacity: 1;
        scale: 1;
      }
    }
    .item {
      animation: apper  linear;
      animation-timeline: view();
      animation-range: entry 0% cover 40%;
    }
    .background-input-3, .background-input-2, .background-input{
      animation: apper  linear;
      animation-timeline: view();
      animation-range: entry 0% cover 40%;
    }
  </style>
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
        <img class="logo" src="./img/logo.png" alt="">
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


<!-- Phần giữa -->

<div class="background">
      <img src="./img/Hero_Banner_-_Desktop_2_KW.webp" alt="">
      <img src="./img/Hero_Banner_-_Desktop_SL_SSS.jpg" alt="">
      <img src="./img/1920_x_788_hero_banner2.webp" alt="">
</div>
                                                                      <!-- phần main 1 -->
 <div class="tile"> 
  <span>
    <div style="background-color: black;"><a href="" style="color: aliceblue;">SẢN PHẨM MỚI</a></div>     
    <div><a href="">BÁN CHẠY NHẤT</a></div>  
  </span>
    
    <a href="./sanpham.php">Xem thêm</a>
 </div>

    <main>
      <article>
        <section>
          <div class="item"> 
            <div class="item-img">
              <a href=""><img src="./img/24CMCW.HD001_-DEN_10.webp" alt=""></a>
              <div class="item-img-size"> 
                <div><a>M</a></div>
                <div><a>L</a></div>
                <div><a>XL</a></div>
                <div><a>2XL</a></div>
                <div><a>3XL</a></div>
              </div>
            </div>
            <div class="item-conten">
              <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
              <div class="item-conten-font">
                <p>790.000đ</p>
                <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
              </div> 
            </div>
          </div>
          <div class="item"> 
            <div class="item-img">
              <a href=""><img src="./img/24CMAW.QD006_-_IMG_3727-_BE_KAKI.webp" alt=""></a>
              <div class="item-img-size"> 
                <div><a>M</a></div>
                <div><a>L</a></div>
                <div><a>XL</a></div>
                <div><a>2XL</a></div>
                <div><a>3XL</a></div>
              </div>
            </div>
            <div class="item-conten">
              <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
              <div class="item-conten-font">
                <p>790.000đ</p>
                <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
              </div> 
            </div>
          </div>
          <div class="item"> 
            <div class="item-img">
              <a href=""><img src="./img/24CMCW.TN001_-_Den_2.webp" alt=""></a>
              <div class="item-img-size"> 
                <div><a>M</a></div>
                <div><a>L</a></div>
                <div><a>XL</a></div>
                <div><a>2XL</a></div>
                <div><a>3XL</a></div>
              </div>
            </div>
            <div class="item-conten">
              <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
              <div class="item-conten-font">
                <p>790.000đ</p>
                <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
              </div> 
            </div>
          </div>
          <div class="item"> 
            <div class="item-img">
              <a href=""><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
              <div class="item-img-size"> 
                <div><a>M</a></div>
                <div><a>L</a></div>
                <div><a>XL</a></div>
                <div><a>2XL</a></div>
                <div><a>3XL</a></div>
              </div>
            </div>
            <div class="item-conten">
              <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
              <div class="item-conten-font">
                <p>790.000đ</p>
                <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
              </div> 
            </div>
          </div>
          <div class="item"> 
            <div class="item-img">
              <a href=""><img src="./img/24CMAW.AT027.20_40.webp" alt=""></a>
              <div class="item-img-size"> 
                <div><a>M</a></div>
                <div><a>L</a></div>
                <div><a>XL</a></div>
                <div><a>2XL</a></div>
                <div><a>3XL</a></div>
              </div>
            </div>
            <div class="item-conten">
              <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
              <div class="item-conten-font">
                <p>790.000đ</p>
                <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
              </div> 
            </div>
          </div>
       
        </section>

      </article>

    </main>

    <div class="background-input"></div>


                                                           <!-- phần main 2 -->

    <div class="tile"> 
        <h1>SẢN PHẨM THU ĐÔNG</h1>
        
        <a href="./sanpham.html">Xem thêm</a>
     </div>
    
        <main>
          <article>
            <section>
              <div class="item"> 
                <div class="item-img">
                  <a href=""><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
                  <div class="item-img-size"> 
                    <div><a>M</a></div>
                    <div><a>L</a></div>
                    <div><a>XL</a></div>
                    <div><a>2XL</a></div>
                    <div><a>3XL</a></div>
                  </div>
                </div>
                <div class="item-conten">
                  <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                  <div class="item-conten-font">
                    <p>790.000đ</p>
                    <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                    <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                  </div> 
                </div>
              </div>
              <div class="item"> 
                <div class="item-img">
                  <a href=""><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
                  <div class="item-img-size"> 
                    <div><a>M</a></div>
                    <div><a>L</a></div>
                    <div><a>XL</a></div>
                    <div><a>2XL</a></div>
                    <div><a>3XL</a></div>
                  </div>
                </div>
                <div class="item-conten">
                  <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                  <div class="item-conten-font">
                    <p>790.000đ</p>
                    <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                    <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                  </div> 
                </div>
              </div>
              <div class="item"> 
                <div class="item-img">
                  <a href=""><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
                  <div class="item-img-size"> 
                    <div><a>M</a></div>
                    <div><a>L</a></div>
                    <div><a>XL</a></div>
                    <div><a>2XL</a></div>
                    <div><a>3XL</a></div>
                  </div>
                </div>
                <div class="item-conten">
                  <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                  <div class="item-conten-font">
                    <p>790.000đ</p>
                    <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                    <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                  </div> 
                </div>
              </div>
              <div class="item"> 
                <div class="item-img">
                  <a href=""><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
                  <div class="item-img-size"> 
                    <div><a>M</a></div>
                    <div><a>L</a></div>
                    <div><a>XL</a></div>
                    <div><a>2XL</a></div>
                    <div><a>3XL</a></div>
                  </div>
                </div>
                <div class="item-conten">
                  <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                  <div class="item-conten-font">
                    <p>790.000đ</p>
                    <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                    <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                  </div> 
                </div>
              </div>
              <div class="item"> 
                <div class="item-img">
                  <a href=""><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
                  <div class="item-img-size"> 
                    <div><a>M</a></div>
                    <div><a>L</a></div>
                    <div><a>XL</a></div>
                    <div><a>2XL</a></div>
                    <div><a>3XL</a></div>
                  </div>
                </div>
                <div class="item-conten">
                  <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                  <div class="item-conten-font">
                    <p>790.000đ</p>
                    <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                    <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                  </div> 
                </div>
              </div>
           
            </section>
    
          </article>
    
        </main>

      <div class="background-input-2"></div>
                                                                   <!-- phần main 3 -->

    <div class="tile"> 
      <h1>SẢN PHẨM CHẠY BỘ</h1>
      
      <a href="./sanpham.html">Xem thêm</a>
   </div>
  
      <main>
        <article>
          <section>
            <div class="item"> 
              <div class="item-img">
                <a href=""><img src="./img/Xanh_Neon_1.webp" alt=""></a>
                <div class="item-img-size"> 
                  <div><a>M</a></div>
                  <div><a>L</a></div>
                  <div><a>XL</a></div>
                  <div><a>2XL</a></div>
                  <div><a>3XL</a></div>
                </div>
              </div>
              <div class="item-conten">
                <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                <div class="item-conten-font">
                  <p>790.000đ</p>
                  <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                  <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="item-img">
                <a href=""><img src="./img/Xanh_Neon_1.webp" alt=""></a>
                <div class="item-img-size"> 
                  <div><a>M</a></div>
                  <div><a>L</a></div>
                  <div><a>XL</a></div>
                  <div><a>2XL</a></div>
                  <div><a>3XL</a></div>
                </div>
              </div>
              <div class="item-conten">
                <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                <div class="item-conten-font">
                  <p>790.000đ</p>
                  <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                  <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="item-img">
                <a href=""><img src="./img/Xanh_Neon_1.webp" alt=""></a>
                <div class="item-img-size"> 
                  <div><a>M</a></div>
                  <div><a>L</a></div>
                  <div><a>XL</a></div>
                  <div><a>2XL</a></div>
                  <div><a>3XL</a></div>
                </div>
              </div>
              <div class="item-conten">
                <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                <div class="item-conten-font">
                  <p>790.000đ</p>
                  <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                  <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="item-img">
                <a href=""><img src="./img/Xanh_Neon_1.webp" alt=""></a>
                <div class="item-img-size"> 
                  <div><a>M</a></div>
                  <div><a>L</a></div>
                  <div><a>XL</a></div>
                  <div><a>2XL</a></div>
                  <div><a>3XL</a></div>
                </div>
              </div>
              <div class="item-conten">
                <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                <div class="item-conten-font">
                  <p>790.000đ</p>
                  <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                  <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="item-img">
                <a href=""><img src="./img/Xanh_Neon_1.webp" alt=""></a>
                <div class="item-img-size"> 
                  <div><a>M</a></div>
                  <div><a>L</a></div>
                  <div><a>XL</a></div>
                  <div><a>2XL</a></div>
                  <div><a>3XL</a></div>
                </div>
              </div>
              <div class="item-conten">
                <a href="">Áo phao dày Ultrawarm Puffer có mũ</a>
                <div class="item-conten-font">
                  <p>790.000đ</p>
                  <p style="background-color: #2b3ac5;color: white;border-radius: 5px;padding: 3px;">-5%</p>
                  <p style="text-decoration: line-through;color: darkgrey;">749.000đ</p>
                </div> 
              </div>
            </div>
         
          </section>
  
        </article>
  
      </main>

      <div class="background-input-3"></div>




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