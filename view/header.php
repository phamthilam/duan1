
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LQD STORE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search"> 
                            <form action="index.php?act=sanpham" method="post">
                            <input type="text" placeholder="Tìm kiếm" name="kyw" required>
                            <button ><i class="fa fa-search" name="timkiem"></i></button></form>
                        </div>
                    </div>
                   
                    <div class="col-md-3">
                        <div class="user">
                            <div class="dropdown">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $name?></a>
                            <div class="dropdown-menu">
                                    <a href="index.php?act=thoat" class="dropdown-item">Đăng xuất</a>
                                    <?php
                                if ($id_role==1) {
                                ?>
                                <a href="admin/index.php" class="dropdown-item">Quản lý</a>
                                <?php } ?>
                                                
                            </div>
                                <?php
                               } else {
                                  ?>  
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                                <div class="dropdown-menu">
                                    <a href="index.php?act=dangnhap" class="dropdown-item">Đăng nhập</a>
                                    <a href="index.php?act=dangky" class="dropdown-item">Đăng ký</a>
                                </div>
                            <?php
                            }
                                ?>
                            </div>
                            <div class="cart">
                                <a href="index.php?act=addcart"><i class="fa fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->
        
        
        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ </a>
                            <a href="index.php?act=sanpham" class="nav-item nav-link">Sản phẩm</a>
                            <a href="index.php?act=gioithieu" class="nav-item nav-link">Voucher</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang khác</a>
                                <div class="dropdown-menu">
                                    <a href="index.php?act=lienhe" class="dropdown-item">liên hệ</a>
                                    <a href="index.php?act=chinhsach" class="dropdown-item">Chính sách</a>
                                    <a href="index.php?act=taikhoan" class="dropdown-item">Tài khoản của tôi</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>