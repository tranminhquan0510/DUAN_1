<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shine ONE</title>
  <link rel="stylesheet" href="./index.css">
  <script src="model.js"></script>
  <style>
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
            <a href="">SẢN PHẨM</a>
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
 <div class="tile"> 
    <h4>34 kết quả</h4>
    <span> 
      
      SẮP XẾP THEO 
      
      <div class="dropdown">
      <button class="dropdown-button">Mặc định <div></div> </button>
      <ul class="dropdown-menu">
        <li>Mới nhất</li>
        <li>Bán chạy</li>
        <li>Giá thấp đến cao</li>
        <li>Giá cao đến thấp</li>
        <li>%Giảm giá nhiều</li>
      </ul>
    </div>

    </span>
 </div>

 
    <main>
      <aside>
        <p style="font-size: 14px;
                  font-weight: bold;
                  color: rgb(94, 92, 92);
                  margin-bottom: 15px;
                  ">Loại sản phẩm</p>

        <a class="danhmuc" href=""><div class="tick"></div>Áo giữ nhiệt</a>
        <a class="danhmuc" href=""><div class="tick"></div>Sweater</a>
        <a class="danhmuc" href=""><div class="tick"></div>Sơ mi</a>
        <a class="danhmuc" href=""><div class="tick"></div>Áo khoác</a>
        <a class="danhmuc" href=""><div class="tick"></div>Denim</a>
        <a class="danhmuc" href=""><div class="tick"></div>Quần dài</a>
        <a class="danhmuc" href=""><div class="tick"></div>Mũ / Nón</a>
        <a class="danhmuc" href=""><div class="tick"></div>Áo dài tay</a>

        <p style="font-size: 14px;
                  font-weight: bold;
                  color: rgb(94, 92, 92);
                  margin-bottom: 15px;
                  ">Phù hợp với</p>
        <a class="danhmuc" href=""><div class="tick"></div>Mặc trong nhà</a>
        <a class="danhmuc" href=""><div class="tick"></div>Mặc ra đường</a>
        <a class="danhmuc" href=""><div class="tick"></div>Mặc vận động</a>

        <p style="font-size: 14px;
        font-weight: bold;
        color: rgb(94, 92, 92);
        margin-bottom: 40px;
        ">Màu sắc</p>
        <div class="all-mausac">
          <a class="mausac" href=""><div style="background-color: black;"></div>Đen</a>
          <a class="mausac" href=""><div style="background-color: rgb(251, 1, 1);"></div>Đỏ</a>
          <a class="mausac" href=""><div style="background-color: rgb(63, 246, 93);"></div>Xanh lá</a> 
          <a class="mausac" href=""><div style="background-color: rgb(255, 248, 41);"></div>Zàng</a> 
        </div>
        <div class="all-mausac">
          <a class="mausac" href=""><div style="background-color: rgb(122, 99, 255);"></div>Tím</a>
          <a class="mausac" href=""><div style="background-color: rgb(255, 153, 0);"></div>Cam</a> 
          <a class="mausac" href=""><div style="background-color: rgb(81, 214, 254);"></div>Xanh sky</a>
          <a class="mausac" href=""><div style="background-color: rgb(74, 35, 35);"></div>Nâu</a> 
        </div>


      </aside>

      <article>
        <section>
          <div class="item"> 
            <div class="item-img">
              <a href="./ctsanpham.php"><img src="./img/24CMCW.KM005_-_Navy_1.webp" alt=""></a>
              <div class="item-img-size"> 
                <div><a>M</a></div>
                <div><a>L</a></div>
                <div><a>XL</a></div>
                <div><a>2XL</a></div>
                <div><a>3XL</a></div>
              </div>
            </div>
            <div class="item-conten">
              <a href="./ctsanpham.php">Áo phao dày Ultrawarm Puffer có mũ</a>
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
        <hr style="margin-top: 30px;margin-bottom: 20px;">
        <div class="more">
          <div class="more-1"><a href="">Xem thêm</a></div>
          <p style="color: rgb(150, 150, 150);" >Hiển thị 1 - 24 trên tổng số 74 sản phẩm</p>
        </div>

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