<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shine ONE</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./ctsanpham.css">
  <script src="model.js"></script>
  <style>
    .quantity{
        border: 2px solid black;
        border-radius: 50px;
        width: 120px;
        height: 40px;
        margin-right: 10px;
        display: flex;
        justify-content: space-evenly;
    }
    .quantity-input{
        width: 30px;
        border: none;
        transform: translateX(10px);
    }
    .sanpham-2-buttom{
        display: flex;

    }
    .buttom-cart{
        width: 100%;
        height: 40px;
        background-color: black;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .buttom-cart a{
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: aliceblue;
    }
    .buttom-cart:hover{
        background-color: #e1e1e1;
    }
    .buttom-cart:hover a{
        color: black;
    }
    .noidung{
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
    }
    .noidung p{
        width: 40%;
        color: black;
        font-size: 12px;
        font-weight: bold;
        display: flex;
        align-items: center;
    }
    ul{
        margin-top: 10px;
        font-size: 13px;
    }
    ul li{
        margin-bottom: 20px;
        margin-left: 16px;
        font-family: Arial, sans-serif;
        list-style: square;
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


<!-- Phần giữa -->
    <section class="phan-san-pham">
        <div class="title-link">
            <a href="./index.php" class="link-1">Trang chủ</a>
            <p style="margin: 0px 10px;">/</p>
            <a href="./sanpham.php">Sản phẩm</a>
        </div>      
        
        <div class="sanpham">

            <div class="sanpham-1"><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></div>

            <div class="sanpham-2">
                <h1 style="font-size: 30px;">Áo Polo Nam phối Jeans</h1>
                <p>Copper Denim</p>
                <span><img src="./img/rating (2).png" width="130px" alt="">(4.9)</span>
                <p style="text-decoration: line-through;color: darkgrey;margin-top: 10px;">399.000đ</p>
                <div class="sanpham-2-gia">
                    <h1>160.000đ</h1>
                    <h1 style="font-size: 17px;background-color: #2b3ac5;color: white;border-radius: 5px;padding: 4px;margin-left: 20px;">-60%</h1>
                </div>
                <em style="font-weight: bolder;font-size: 13px;">Không áp dụng chính sách đổi trả</em> <br> <br>
                <p style="color: black;font-size: 14px; transform: translateY(30px);">Kích thước Áo: <b>M</b> (1m60 - 1m65 | 55kg - 61kg)</p> <br>
                <div class="sanpham-2-size"> 
                    <div style="background-color: black;"><a style="color: aliceblue;">M</a></div>
                    <div><a>L</a></div>
                    <div><a>XL</a></div>
                    <div><a>2XL</a></div>
                    <div><a>3XL</a></div>
                </div>
                <div class="sanpham-2-buttom">
                    <div class="quantity">
                        <button aria-label="Giảm số lượng" style="border: none;width: 20px;background-color: rgba(240, 248, 255, 0);cursor: pointer;">-</button>
                        <input type="number" value="1" class="quantity-input">
                        <button aria-label="Tăng số lượng" style="border: none;width: 20px;background-color: rgba(240, 248, 255, 0);;cursor: pointer;">+</button>
                        <script src="./script.js"></script>
                    </div>
                    <div class="buttom-cart"><a href="./cart.php">Thêm vào giỏ hàng</a></div>
                </div>

                <div class="noidung">
                    <p><img src="./img/return.svg" width="35px" style="margin-right: 5px;" alt="">Đổi trả cực dễ chỉ cần số điện thoại</p>
                    <p><img src="./img/return-60.svg" width="35px" style="margin-right: 5px;" alt="">60 ngày đổi trả vì bất kỳ lý do gì</p>
                </div>
                <div class="noidung">
                    <p><img src="./img/phone.svg" width="35px" style="margin-right: 5px;" alt="">Hotline 1900.34.37.24 hỗ trợ từ 8h30 - 22h mỗi ngày</p>
                    <p><img src="./img/location.svg" width="35px" style="margin-right: 5px;" alt=""> Đến tận nơi nhận hàng trả, hoàn tiền trong 24h</p>
                </div>
                <hr style="margin-top: 40px;">
                <ul>
                    <p style="color: black; margin-bottom: 10px;font-size: 14px"><b>Đặc điểm nổi bật</b></p>
                    <li>Chất liệu: 100% Polyester</li>
                    <li>Xử lý hoàn thiện vải: Quick-Dry + Wicking + Stretch</li>
                    <li><b>Công nghệ Chafe-Free</b> hạn chế tối đa ma sát trong quá trình vận động từ các đường may tối giản hoá</li>
                    <li>Trọng lượng áo siêu nhẹ, chỉ 76 gam</li>
                    <li>Sản phẩm được đánh giá phù hợp với hoạt động chạy bộ bởi các Runner chuyên nghiệp</li>
                </ul>


            </div>

        </div>

    </section>

        <div class="chitietsanpham">
            <h2 style="margin-bottom: 40px;">Chi tiết sản phẩm</h2>
            <p style="margin-bottom: 20px;">Áo polo nam phối jeans với thiết kế hiện đại, chất liệu co giãn là sản phẩm 
               tiêu biểu trong BST hợp tác giữa thương hiệu và Copper Denim. 
               Đây chắc chắn là người bạn đồng hành tuyệt vời cho các chàng trai trong quá 
               trình định hình gu thời trang đầy phong cách. 
            </p>
            <img src="./img/mceclip0_83.jpg" alt="">

            <h2 style="margin-bottom: 40px;margin-top: 20px;">Đặc điểm nổi bật Áo polo nam phối Jeans</h2>
            <p style="margin-bottom: 20px;">Cotton USA hay còn gọi là Cotton Mỹ, được sản xuất từ sợi bông tự nhiên và công nhận chất
               lượng từ hiệp hội bông quốc tế Mỹ. Cotton USA chiếm lĩnh thị trường thời trang vì có cấu 
               trúc sợi vải dai và dài vượt trội hơn nhiều so với các sợi vải khác. Từ đó, chúng sở hữu 
               khả năng thấm hút, bền chắc, thoáng khí vượt trội.
            </p>
            <p style="margin-bottom: 20px;">Cùng với đó là 3% spandex có khả năng co giãn tốt, mang lại cảm giác thoải mái suốt cả ngày vận động.</p>
            <img src="./img/ao-so-_mi-_nam-_Excool-_Limited-_ngan-_tay-_chui-_dau-chat-lieu-1_(1).png" alt="">
        </div>


        <div class="tile"> 
            <h1>GỢI Ý SẢN PHẨM</h1>
              
              <a href="./sanpham.html">Xem thêm</a>
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