<?php
    require_once('config.php');
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : ''; 
    $user = isset($_SESSION['tentk']) ? $_SESSION['tentk'] : '';
    $sql = 'select * from product';
    $tacasanpham = mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
    /* Đảm bảo toàn bộ body có margin và padding là 0 */
    body {
        margin: 0;
        padding: 0;
    }

    /* Sử dụng flexbox cho layout chính để dễ dàng căn chỉnh */
    article {
        display: flex;
        height: 100vh;
    }

    /* Cải thiện kiểu dáng sidebar */
    .bg-secondary {
        background-color: #343a40 !important;
        color: white;
        padding-top: 20px;
        padding-bottom: 20px;
        height: 100vh;
    }

    .figure {
        text-align: center;
    }

    .thanhIcon a {
        color: #f0f8ff;
        text-decoration: none;
    }

    /* Cải thiện kích thước và màu sắc cho biểu tượng tài khoản */
    .material-symbols-outlined {
        font-size: 100px;
        color: #f0f8ff;
    }

    .figure-caption {
        text-align: center;
        margin-top: 10px;
    }

    .figure-caption b {
        font-size: 20px;
        font-weight: 800;
        position: relative;
        top: -4px;
    }

    /* Cải thiện các link trong sidebar */
    .list-group-item {
        background-color: #343a40;
        color: #fff;
        border: none;
        font-size: 18px;
    }

    .list-group-item:hover {
        background-color: #495057;
        color: #f0f8ff;
    }

    .list-group-item-action {
        border-radius: 0;
        padding: 12px 20px;
        font-size: 16px;
    }

    /* Cải thiện giao diện bảng */
    .table {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 12px;
        text-align: center;
        vertical-align: middle;
    }

    .table th {
        background-color: #007bff;
        color: white;
    }

    .table td {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }

    .btn {
        font-size: 14px;
        margin: 5px 0;
    }

    /* Tăng chiều cao của các nút */
    .btn-info, .btn-danger, .btn-success {
        padding: 10px 15px;
        font-size: 14px;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    /* Sửa lại kiểu dáng cho các nút trên sidebar */
    .list-group-item i {
        font-size: 20px;
        margin-right: 10px;
    }

    /* Cải thiện vị trí của nút đăng xuất */
    .text-dark {
        display: block;
        margin-top: 20px;
        text-align: center;
        color: #f0f8ff;
        font-size: 18px;
    }

    .text-dark:hover {
        color: #007bff;
    }

    /* Sửa phần nội dung chính */
    .col-10.bg-light {
        padding: 30px;
        background-color: #f8f9fa;
    }

    .col-2.bg-secondary {
        padding-left: 15px;
    }

    /* Tăng kích thước tiêu đề */
    h2 {
        font-size: 30px;
        font-weight: bold;
        color: #007bff;
    }

    /* Chỉnh sửa khoảng cách giữa các phần tử */
    .mb-3 {
        margin-bottom: 20px;
    }
</style>

</head>

<body class="container-fluid">
    <article class="row">
        <section class="col-2 bg-secondary pb-4">
            <figure class="figure mt-3 center">

                <figcaption class="figure-caption text-center text-white font-weight-bold">
            <div class="thanhIcon">
                <a  href="#" style="display: flex; flex-direction: column;">

                <span style="font-size: 100px;" class="material-symbols-outlined">
                account_circle
                </span>      

                <?php if (isset($_SESSION['tentk'])) { ?>
                    <b style=" position:relative; top:-4px;font-size: 30px; vertical-align: middle; font-weight:800;">Admin-<?php echo $user; ?></b>
                <?php } ?>                             
                </a>
            </div>

                    <br>
                    <a class="text-dark" href="sign_in.php">Đăng Xuất</a>
                </figcaption>
            </figure>
            <hr>
            <nav>
            <div class="list-group">
                <a class="list-group-item list-group-item-action list-group-item-dark" href="danhmuc.php">
                    <i class="bi bi-clipboard mr-2" style="font-size: 20px;"></i>Quản Lý Danh Mục
                </a>
                
                <a class="list-group-item list-group-item-action list-group-item-dark" href=".php">
                    <i class="bi bi-person mr-2" style="font-size: 20px;"></i>Quản Lý Tài Khoản
                </a>
                
                <a class="list-group-item list-group-item-action list-group-item-dark" href="manage_comments.php">
                    <i class="bi bi-chat-text mr-2" style="font-size: 20px;"></i>Quản Lý Bình Luận
                </a>
                
                <a class="list-group-item list-group-item-action list-group-item-dark" href="haodon.php">
                    <i class="bi bi-file-earmark-text mr-2" style="font-size: 20px;"></i>Quản Lý Hóa Đơn
                </a>
            </div>

            </nav>
        </section>
        <section class="col-10 bg-light">
            <h2 class="mt-3">Quản lý Sản Phẩm</h2>
            <a class="btn btn-success mb-3" href="themproduct.php">Thêm mới</a>
            <table class="table table-bordered table-hover bg-white">
                
                <tr class="table-active">
                    <td>Mã SP</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Hình Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Hành Động</td>
                </tr>
                <?php while ($sanpham = mysqli_fetch_assoc($tacasanpham)){?>
                <tr>
                    <td><?php echo $sanpham['masp'];?></td>
                    <td><?php echo $sanpham['tensp'];?></td>
                    <td><img src="<?php echo $sanpham ['hinhanh'];?>" width="100px" height="150px;"></td>
                    <td><?php echo $sanpham['dongia'];?></td>
                    <td><?php echo $sanpham['mota'];?></td>
                    <td>
                            <a class="btn btn-info" href="suaproduct.php?&ma=<?php echo $sanpham['masp']; ?>">Sửa</a>
                        <a class="btn btn-danger" href="xoaproduct.php?&ma=<?php echo $sanpham['masp']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php }?>
               

            </table>
        </section>
    </article>
    <script>

    </script>
</body>

</html>